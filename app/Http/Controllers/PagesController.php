<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Storage;

class PagesController extends Controller
{

    private function gallery_items(){
      $links = array(
        'art' => array('link' => '/images/gallery_icons/Art-135x110.jpg', 'label' => 'Art Gallery'),
        'classrooms' => array('link' => '/images/gallery_icons/Classrooms-135x110.jpg', 'label' => 'Classroom Gallery'),
        'electives' => array('link' => '/images/gallery_icons/Electives-135x110.jpg', 'label' => 'Electives Gallery'),
        'sports' => array('link' => '/images/gallery_icons/Sports-135x110.jpg', 'label' => 'Sports Gallery'),
        'studentlife' => array('link' => '/images/gallery_icons/Studentlife-135x110.jpg', 'label' => 'Student Life Gallery'),
      );
      return $links;
    }

    public function index(){
      $title = 'Welcome to '.config('app.name');
      $files = Storage::disk('images')->files('showcase');
      $links = gallery_items();
      
      return view('pages.index')
        ->with('title', $title)
        ->with('links', $links)
        ->with('files', $files);
    }

}
