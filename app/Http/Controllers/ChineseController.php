<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class ChineseController extends Controller
{
    //sets app language to english
    public function index(){
      setLocale('zh');
      return redirect()->back();
    }

}
