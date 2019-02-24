<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmissionController extends Controller
{

  private function sidelinks(){
    $links = array(
       'admission' => array('link' => 'admission/admissions', 'label' => 'Admission'),
       'tuitionfees' => array('link' => 'admission/tuition-fees', 'label' => 'Tuition and Fees'),
       'application' => array('link' => 'admission/application', 'label' => 'Admissions Application'),
       'etution' => array('link' => 'admission/e-tuition', 'label' => 'E-Tuition'),
       'contact' => array('link' => 'admission/admission-contact', 'label' => 'Admissions Contact'),
    );
    return $links;
  }

    public function admissions()
    {

      $title = 'Admissions';
      $sidelinks = $this->sidelinks();
      return view('admission.admissions')
        ->with('sidelinks', $sidelinks)
        ->with('title', $title);
    }

    public function admissionsaplication()
    {

        $title = 'New Student Application';
        $sidelinks = $this->sidelinks();
        return view('admission.application')
          ->with('sidelinks', $sidelinks)
          ->with('title', $title);
    }

    public function admissioncontact()
    {

        $title = 'Admissions Contact';
        $sidelinks = $this->sidelinks();
        return view('admission.contact')
          ->with('sidelinks', $sidelinks)
          ->with('title', $title);
    }

    public function etuition()
    {

        $title = 'E-Tuition';
        $sidelinks = $this->sidelinks();
        return view('admission.e-tuition')
          ->with('sidelinks', $sidelinks)
          ->with('title', $title);
    }

    public function tuitionfees()
    {

        $title = 'Admission Tuition and Fees';
        $sidelinks = $this->sidelinks();
        return view('admission.tuitionfees')
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
