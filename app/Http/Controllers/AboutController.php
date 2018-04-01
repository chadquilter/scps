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
    public function index()
    {

        $title = 'Contact';
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

        $title = 'Contact';
        return view('about.corevalues')
          ->with('title', $title);
    }

    public function eslrs()
    {

        $title = "ESLR's";

        return view('about.eslr')
          ->with('title', $title);
    }

    public function testemony()
    {

        $title = 'Contact';

        return view('about.testemony')
          ->with('title', $title);
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
