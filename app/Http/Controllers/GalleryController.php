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
      $files = Storage::disk('images')->files('showcase');
      return view('contact.create')
        ->with('sidelinks', $sidelinks)
        ->with('files', $files)
        ->with('title', $title);
    }

    public function student(){
      $title = 'Student Life Photo Gallery';
      $sidelinks = $this->sidelinks();
      $files = Storage::disk('images')->files('showcase');
      return view('contact.create')
        ->with('sidelinks', $sidelinks)
        ->with('files', $files)
        ->with('title', $title);
    }

    public function art(){
      $title = 'Art Photo Gallery';
      $sidelinks = $this->sidelinks();
      $files = Storage::disk('images')->files('showcase');
      return view('contact.create')
        ->with('sidelinks', $sidelinks)
        ->with('files', $files)
        ->with('title', $title);
    }

    public function elective(){
      $title = 'Elective Photo Gallery';
      $sidelinks = $this->sidelinks();
      $files = Storage::disk('images')->files('showcase');
      return view('contact.create')
        ->with('sidelinks', $sidelinks)
        ->with('files', $files)
        ->with('title', $title);
    }

    public function classroom(){
      $title = 'Classroom Photo Gallery';
      $sidelinks = $this->sidelinks();
      $files = Storage::disk('images')->files('showcase');
      return view('contact.create')
        ->with('sidelinks', $sidelinks)
        ->with('files', $files)
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
