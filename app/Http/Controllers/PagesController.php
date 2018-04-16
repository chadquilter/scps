<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Storage;

class PagesController extends Controller
{

  public function __construct(Request $request)
  {
      $lang = session('lang');
      setLocal('$lang');
  }

    public function index(){
      $title = 'Welcome to '.config('app.name');
      $files = Storage::disk('images')->files('showcase');
      return view('pages.index')
        ->with('title', $title)
        ->with('files', $files);
    }

}
