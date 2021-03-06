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
          'calendar' => array('link' => 'academic/academic-calendar', 'label' => 'Academic Calendar'),
          'schedule' => array('link' => 'academic/academic-schedule', 'label' => 'Academic Schedule'),
          'departments' => array('link' => 'academic/departments', 'label' => 'Departments'),
          'powerschool' => array('link' => 'academic/powerschool', 'label' => 'Powerschool'),
          'administration' => array('link' => 'academic/administration', 'label' => 'Administration'),
       );
       return $links;
     }

     private function electives(){
       $electives = array('American Culture',
        'Audio Visual',
        'Chinese Culture',
        'Chorale',
        'Conditioning',
        'Design/Construction',
        'Drivers Education',
        'English Symposium',
        'Financial Literacy',
        'Graphic Design',
        'Health',
        'Home Economics',
        'Latin',
        'Lifeskills',
        'Men’s Drill',
        'Robotics',
        'SAT Prep',
        'Yearbook');
       return $electives;
     }

     private function administration_staff(){
       $admin = array(
          'jpm' => array('link' => '/images/admin/th.jpeg', 'label' => 'Our curtious staff are here to assist all our Students and Partners!', 'bio' => '')
       );
       return $admin;
     }

     public function calendar()
     {

         $title = 'Academic Calendar';
         $sidelinks = $this->sidelinks();
         return view('academic.calendar')
          ->with('sidelinks', $sidelinks)
          ->with('title', $title);
     }

     public function department()
     {

         $title = 'Academic Departments';
         $sidelinks = $this->sidelinks();
         $electives = $this->electives();
         return view('academic.department')
          ->with('sidelinks', $sidelinks)
          ->with('electives', $electives)
          ->with('title', $title);
     }

     public function powerschool()
     {

         $title = 'Powerschool';
         $sidelinks = $this->sidelinks();
         return view('academic.powerschool')
          ->with('sidelinks', $sidelinks)
          ->with('title', $title);
     }

     public function schedule()
     {

         $title = 'Academic Schedule';
         $sidelinks = $this->sidelinks();
         return view('academic.schedule')
          ->with('sidelinks', $sidelinks)
          ->with('title', $title);
     }

     public function administration()
     {

         $title = 'Administration';
         $sidelinks = $this->sidelinks();
         $admin = $this->administration_staff();
         return view('academic.administration')
          ->with('sidelinks', $sidelinks)
          ->with('admin', $admin)
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
