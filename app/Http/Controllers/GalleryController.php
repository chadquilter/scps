<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class GalleryController extends Controller
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
           'studentlife' => array('link' => '/gallery/student-life-gallery', 'image_link' =>  '/images/gallery_icons/Studentlife-135x110.jpg', 'label' => 'Life'),
         );
         return $links;
    }

     private function sidelinks(){
       $links = array(
        'athletics' => array('link' => 'athletics', 'label' => 'Student Athletics'),
        'growth' => array('link' => 'growth', 'label' => 'Student Growth'),
      );
      return $links;
     }

    public function sports(){
      $title = 'Sports Photo Gallery';
      $sidelinks = $this->sidelinks();
      $files = Storage::disk('images')->files('gallery/sports');
      $links = $this->gallery_items();
      return view('gallery.sports-gallery')
        ->with('sidelinks', $sidelinks)
        ->with('files', $files)
        ->with('links', $links)
        ->with('title', $title);
    }

    public function student(){
      $title = 'Student Life Photo Gallery';
      $sidelinks = $this->sidelinks();
      $files = Storage::disk('images')->files('gallery/student');
      $links = $this->gallery_items();
      return view('gallery.student-life-gallery')
        ->with('sidelinks', $sidelinks)
        ->with('files', $files)
        ->with('links', $links)
        ->with('title', $title);
    }

    public function art(){
      $title = 'Art Photo Gallery';
      $sidelinks = $this->sidelinks();
      $files = Storage::disk('images')->files('gallery/art');
      $links = $this->gallery_items();
      return view('gallery.art-gallery')
        ->with('sidelinks', $sidelinks)
        ->with('files', $files)
        ->with('links', $links)
        ->with('title', $title);
    }

    public function elective(){
      $title = 'Elective Photo Gallery';
      $sidelinks = $this->sidelinks();
      $files = Storage::disk('images')->files('gallery/elective');
      $links = $this->gallery_items();
      return view('gallery.elective-gallery')
        ->with('sidelinks', $sidelinks)
        ->with('files', $files)
        ->with('links', $links)
        ->with('title', $title);
    }

    public function classroom(){
      $title = 'Classroom Photo Gallery';
      $sidelinks = $this->sidelinks();
      $files = Storage::disk('images')->files('gallery/classroom');
      $links = $this->gallery_items();
      return view('gallery.classroom-gallery')
        ->with('sidelinks', $sidelinks)
        ->with('files', $files)
        ->with('links', $links)
        ->with('title', $title);
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
