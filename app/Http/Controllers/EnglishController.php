<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class EnglishController extends Controller
{
    //sets app language to english
    public function index(){
      App::setLocale('en');
      return redirect()->back();
    }

}
