<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InternationalController extends Controller
{

    private function sidelinks(){
      $links = array(
       'academy' => array('link' => '\academy', 'label' => 'The Academy'),
       'acceleratedenglish' => array('link' => '\accelerated-english', 'label' => 'Accelerated English'),
       'admissionfees' => array('link' => '\international-admission', 'label' => 'Admission and Fees'),
       'partners' => array('link' => '\international-partners', 'label' => 'International Partners'),
       'services' => array('link' => '\international-services', 'label' => 'International Services'),
     );
     return $links;
    }

    public function academy()
    {

      $title = 'International Academy';
      return view('international.academy')
      ->with('sidelinks', $sidelinks)
      ->with('title', $title);
    }

    public function acceleratedenglish()
    {

      $title = 'Accelerated English Learning';
      return view('international.acceleratedenglish')
      ->with('sidelinks', $sidelinks)
      ->with('title', $title);
    }

    public function admissionfees()
    {

      $title = 'International Admission and Fees';
      return view('international.admissionfees')
      ->with('sidelinks', $sidelinks)
      ->with('title', $title);
    }

    public function partners()
    {

      $title = 'International Partners';
      return view('international.partners')
      ->with('sidelinks', $sidelinks)
      ->with('title', $title);
    }

    public function services()
    {

      $title = 'International services';
      return view('international.services')
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
