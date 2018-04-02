<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcademicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     private function sidelinks(){
       $links = array(
          'calendar' => array('link' => '\academic-calendar', 'label' => 'Academic Calendar'),
          'departments' => array('link' => '\department', 'label' => 'Departments'),
          'powerschool' => array('link' => '\powerschool', 'label' => 'Powerschool'),
          'schedule' => array('link' => '\academic-schedule', 'label' => 'Academic Schedule'),
          'administration' => array('link' => '\administration', 'label' => 'Administration'),
       );
       return $links;
     }

     public function calendar()
     {

         $title = 'Academic Calendar';
         return view('academic.calendar')
          ->with('sidelinks', $sidelinks)
          ->with('title', $title);
     }

     public function department()
     {

         $title = 'Academic Departments';
         return view('academic.department')
          ->with('sidelinks', $sidelinks)
          ->with('title', $title);
     }

     public function powerschool()
     {

         $title = 'Powerschool';
         return view('academic.powerschool')
          ->with('sidelinks', $sidelinks)
          ->with('title', $title);
     }

     public function schedule()
     {

         $title = 'Academic Schedule';
         return view('academic.schedule')
          ->with('sidelinks', $sidelinks)
          ->with('title', $title);
     }

     public function administration()
     {

         $title = 'Administration';
         return view('academic.administration')
          ->with('sidelinks', $sidelinks)
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
