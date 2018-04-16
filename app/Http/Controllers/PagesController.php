<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class PagesController extends Controller
{

  private function setlanguage(){
      $lang = $request->session()->get('lang');
      App::setLocale($lang);  
  }

  public function __construct()
  {
     $this->setLangauge();
  }

    public function index(){
      $title = 'Welcome to '.config('app.name');
      $files = Storage::disk('images')->files('showcase');
      return view('pages.index')
        ->with('title', $title)
        ->with('files', $files);
    }

}
