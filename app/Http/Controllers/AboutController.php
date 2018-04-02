<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private function sidelinks(){
      $links = ([
         'About Us' => '/about',
         'Vision' => '/vision',
         'Core Values' => '/core-values',
         'Testimonials' => '/testimonials'
      ]);
      return $links;
    }

    public function index()
    {

        $title = 'About Us';
        return view('about.index')
          ->with('title', $title);
    }

    public function schoolhistory()
    {

        $title = 'School History';
        return view('about.schoolhistory')
          ->with('title', $title);
    }

    public function vision()
    {

        $title = 'Vision';
        return view('about.vision')
          ->with('title', $title);
    }

    public function corevalues()
    {
        $title = 'Core Values';
        return view('about.corevalues')
          ->with('title', $title);
    }


    public function testemony()
    {
        $title = 'Testemony';
        $sidelinks = $this->sidelinks();
        return view('about.testemony')
          ->with('title', $title)
          ->with('sidelinks', $sidlinks);
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
