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

        $files = $model::where('type', $type)
                        ->orderBy('id', 'upload_preview')->paginate($records_per_page);

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



  public function store(Request $request)
  {
    if ($request->hasFile('image')) {
    //
      // $file = $request->file('image');
      // $name = time().'.' . explode('/', explode(':', substr($file, 0, strpos($file, ';')))[1])[1];
       //\Image::make($request->get('image'))->save(public_path('storage/app/public/').$file);
       //$destinationPath = 'images/uploads';
       //$file->move($destinationPath,$file->getClientOriginalName());
       //$request->file('image')->store('docs');
       //$request->file('image')->store('public');
       //$request->image->storeAs('public', $request->image->getClientOriginalName());

       //$image = new FileUpload();
       //$image->image_name = $name;
       //$image->image_active = 'Y';
       //$image->save();

       return response()->json(['success' => 'You have successfully uploaded an image $request'], 200);
     }else{
       return response()->json(['success' => 'not really, your stuff isnt here. Sorry. {$request} : (', 200]);
     }
   }
 }
