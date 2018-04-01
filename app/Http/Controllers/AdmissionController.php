<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmissionController extends Controller
{


    public function admissions()
    {

      $title = 'Admissions';
      return view('admission.admissions')
        ->with('title', $title);
    }

    public function application()
    {

        $title = 'Admissions Application';
        return view('admission.application')
          ->with('title', $title);
    }

    public function contact()
    {

        $title = 'Admissions Contact';
        return view('admission.contact')
          ->with('title', $title);
    }

    public function etuition()
    {

        $title = 'Admissions E-Tuition';
        return view('admission.e-tuition')
          ->with('title', $title);
    }

    public function tuitionfees()
    {

        $title = 'Admission Tuition and Fees';
        return view('admission.tuitionfees')
          ->with('title', $title);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
