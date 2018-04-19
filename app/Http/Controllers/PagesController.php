<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Storage;

class PagesController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
    private function gallery_items(){
      $links = array(
        'art' => array('link' => '/gallery/art-gallery', 'image_link' => '/images/gallery_icons/Art-135x110.jpg', 'label' => 'Art'),
        'classrooms' => array('link' => '/gallery/classroom-gallery', 'image_link' => '/images/gallery_icons/Classrooms-135x110.jpg', 'label' => 'Classroom'),
        'electives' => array('link' => '/gallery/electives-gallery', 'image_link' =>  '/images/gallery_icons/Electives-135x110.jpg', 'label' => 'Electives'),
        'sports' => array('link' => '/gallery/sports-gallery', 'image_link' =>  '/images/gallery_icons/Sports-135x110.jpg', 'label' => 'Sports'),
        'studentlife' => array('link' => '/gallery/student-life-gallery', 'image_link' =>  '/images/gallery_icons/Studentlife-135x110.jpg', 'label' => 'Student-Life'),
      );
      return $links;
    }

    public function index(){
      $title = 'Welcome to '.config('app.name');
      $files = Storage::disk('images')->files('showcase');
      $links = $this->gallery_items();

      return view('pages.index')
        ->with('title', $title)
        ->with('links', $links)
        ->with('files', $files);
    }

}
