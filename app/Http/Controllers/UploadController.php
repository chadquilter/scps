<?php

namespace App\Http\Controllers;

use App\FileUpload;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App;
use App\Http\Controllers\Controller;
use Storage;

class UploadController extends Controller
{

  private $image_ext = ['jpg', 'jpeg', 'png', 'gif'];
  private $audio_ext = ['mp3', 'ogg', 'mpga'];
  private $video_ext = ['mp4', 'mpeg'];
  private $document_ext = ['doc', 'docx', 'pdf', 'odt'];

  /**
   * Constructor
   */
  public function __construct()
  {
      $this->middleware('auth');
  }

  /**
 * Fetch files by Type or Id
 * @param  string $type  File type
 * @param  integer $id   File Id
 * @return object        Files list, JSON
 */
public function index($type, $id = null)
{
    $model = new FileUpload();

    if (!is_null($id)) {
        $response = $model::findOrFail($id);
    } else {
        $records_per_page = ($type == 'video') ? 6 : 15;

        $files = $model::where('upload_type', $type)
                        ->orderBy('id', 'upload_desc')->paginate($records_per_page);

        $response = [
            'pagination' => [
                'total' => $files->total(),
                'per_page' => $files->perPage(),
                'current_page' => $files->currentPage(),
                'last_page' => $files->lastPage(),
                'from' => $files->firstItem(),
                'to' => $files->lastItem()
            ],
            'data' => $files
        ];
    }

    return response()->json($response);
}

/**
 * Upload new file and store it
 * @param  Request $request Request with form data: filename and file info
 * @return boolean          True if success, otherwise - false
 */
public function store(Request $request)
{
    $max_size = (int)ini_get('upload_max_filesize') * 1000;
    $all_ext = implode(',', $this->allExtensions());

    $this->validate($request, [
        'name' => 'required|unique:files',
        'file' => 'required|file|mimes:' . $all_ext . '|max:' . $max_size
    ]);

    $model = new FileUpload();

    $file = $request->file('file');
    $ext = $file->getClientOriginalExtension();
    $type = $this->getType($ext);

    if (Storage::putFileAs('/public/' . $this->getUserDir() . '/' . $type . '/', $file, $request['name'] . '.' . $ext)) {
        return $model::create([
                'upload_name' => $request['name'],
                'upload_display_name' => $request['name'],
                'upload_type' => $type,
                'upload_extension' => $ext,
                'upload_user_id' => Auth::id()
            ]);
    }

    return response()->json(false);
}

/**
 * Edit specific file
 * @param  integer  $id      File Id
 * @param  Request $request  Request with form data: filename
 * @return boolean           True if success, otherwise - false
 */
public function edit($id, Request $request)
{
    $file = File::where('id', $id)->where('upload_user_id', Auth::id())->first();

    if ($file->upload_name == $request['name']) {
        return response()->json(false);
    }

    $this->validate($request, [
        'name' => 'required|unique:files'
    ]);

    $old_filename = '/public/' . $this->getUserDir() . '/' . $file->type . '/' . $file->name . '.' . $file->extension;
    $new_filename = '/public/' . $this->getUserDir() . '/' . $request['type'] . '/' . $request['name'] . '.' . $request['extension'];

    if (Storage::disk('local')->exists($old_filename)) {
        if (Storage::disk('local')->move($old_filename, $new_filename)) {
            $file->upload_name = $request['name'];
            return response()->json($file->save());
        }
    }

    return response()->json(false);
}


/**
 * Delete file from disk and database
 * @param  integer $id  File Id
 * @return boolean      True if success, otherwise - false
 */
public function destroy($id)
{
    $file = FileUpload::findOrFail($id);

    if (Storage::disk('local')->exists('/public/' . $this->getUserDir() . '/' . $file->type . '/' . $file->name . '.' . $file->extension)) {
        if (Storage::disk('local')->delete('/public/' . $this->getUserDir() . '/' . $file->type . '/' . $file->name . '.' . $file->extension)) {
            return response()->json($file->delete());
        }
    }

    return response()->json(false);
}


/**
 * Get type by extension
 * @param  string $ext Specific extension
 * @return string      Type
 */
private function getType($ext)
{
    if (in_array($ext, $this->image_ext)) {
        return 'image';
    }

    if (in_array($ext, $this->audio_ext)) {
        return 'audio';
    }

    if (in_array($ext, $this->video_ext)) {
        return 'video';
    }

    if (in_array($ext, $this->document_ext)) {
        return 'document';
    }
}

/**
 * Get all extensions
 * @return array Extensions of all file types
 */
private function allExtensions()
{
    return array_merge($this->image_ext, $this->audio_ext, $this->video_ext, $this->document_ext);
}

/**
 * Get directory for the specific user
 * @return string Specific user directory
 */
  private function getUserDir(){
    return Auth::user()->name . '_' . Auth::id();
  }
}
