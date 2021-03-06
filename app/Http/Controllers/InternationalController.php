<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InternationalController extends Controller
{

    private function sidelinks(){
      $links = array(
       'admissionfees' => array('link' => 'international-school/international-admission', 'label' => 'Admission and Fees'),
       'academy' => array('link' => 'international-school/international-academy', 'label' => 'The Academy'),
       'services' => array('link' => 'international-school/international-services', 'label' => 'International Services'),
       'acceleratedenglish' => array('link' => 'international-school/accelerated-english', 'label' => 'Accelerated English'),
       'partners' => array('link' => 'international-school/international-partners', 'label' => 'International Partners'),
     );
     return $links;
    }

    public function academy()
    {

      $title = 'International Academy';
      $sidelinks = $this->sidelinks();
      return view('international.academy')
      ->with('sidelinks', $sidelinks)
      ->with('title', $title);
    }

    public function acceleratedenglish()
    {

      $title = 'Accelerated English Learning';
      $sidelinks = $this->sidelinks();
      return view('international.acceleratedenglish')
      ->with('sidelinks', $sidelinks)
      ->with('title', $title);
    }

    public function admissionfees()
    {

      $title = 'International Admission and Fees';
      $sidelinks = $this->sidelinks();
      return view('international.admissionfees')
      ->with('sidelinks', $sidelinks)
      ->with('title', $title);
    }

    public function partners()
    {

      $title = 'International Partners';
      $sidelinks = $this->sidelinks();
      return view('international.partners')
      ->with('sidelinks', $sidelinks)
      ->with('title', $title);
    }

    public function services()
    {

      $title = 'International Services';
      $sidelinks = $this->sidelinks();
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
