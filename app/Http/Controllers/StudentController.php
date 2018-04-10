<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{

  private function sidelinks(){
    $links = array(
     'athletics' => array('link' => 'student-life/athletics', 'label' => 'Student Athletics'),
     'growth' => array('link' => 'student-life/growth', 'label' => 'Student Growth'),
   );
   return $links;
  }

    public function athletics()
    {

      $title = 'Athletics';
      $sidelinks = $this->sidelinks();
      return view('student.athletics')
      ->with('sidelinks', $sidelinks)
      ->with('title', $title);
    }

    public function growth()
    {

      $title = 'Student Growth';
      $sidelinks = $this->sidelinks();
      return view('student.growth')
      ->with('sidelinks', $sidelinks)
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
