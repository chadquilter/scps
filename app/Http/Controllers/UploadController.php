<?php

namespace App\Http\Controllers;

use App\FileUpload;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Storage;

class UploadController extends Controller
{
  public function store(Request $request)
  {
    if($request->get('image'))
    {
       $file = $request->get('image');
       //$name = time().'.' . explode('/', explode(':', substr($file, 0, strpos($file, ';')))[1])[1];
       //\Image::make($request->get('image'))->save(public_path('storage/app/public/').$file);
       $destinationPath = 'images/uploads';
       $file->move($destinationPath,$file->getClientOriginalName());
     }

    $image= new FileUpload();
    $image->image_name = $name;
    $image->image_active = 'Y';
    $image->save();

    return response()->json(['success' => 'You have successfully uploaded an image'], 200);
  }

}
