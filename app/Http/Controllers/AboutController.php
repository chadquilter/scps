<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{


    public function __construct()
    {
        $lang = $request->session()->get('lang');
        App::setLocale($lang);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private function sidelinks(){
      $links = array(
         'about' => array('link' => 'about-us/about', 'label' => 'About Us'),
         'vision' => array('link' => 'about-us/vision', 'label' => 'Vision'),
         'core-values' => array('link' => 'about-us/core-values', 'label' => 'Core Values'),
         'testimony' => array('link' => 'about-us/testimony', 'label' => 'Testemonials'),
         'school-history' => array('link' => 'about-us/school-history', 'label' => 'School History'),
      );
      return $links;
    }


    public function index()
    {

        $title = 'About Us';
        $sidelinks = $this->sidelinks();
        return view('about.aboutus')
          ->with('sidelinks', $sidelinks)
          ->with('title', $title);
    }

    public function schoolhistory()
    {

        $title = 'School History';
        $sidelinks = $this->sidelinks();
        return view('about.schoolhistory')
          ->with('sidelinks', $sidelinks)
          ->with('title', $title);
    }

    public function vision()
    {

        $title = 'Vision';
        $sidelinks = $this->sidelinks();
        return view('about.vision')
          ->with('sidelinks', $sidelinks)
          ->with('title', $title);
    }

    public function corevalues()
    {
        $title = 'Core Values';
        $sidelinks = $this->sidelinks();
        return view('about.corevalues')
          ->with('sidelinks', $sidelinks)
          ->with('title', $title);
    }


    public function testimony()
    {
        $title = 'Testimony';
        $sidelinks = $this->sidelinks();
        return view('about.testimony')
          ->with('title', $title)
          ->with('sidelinks', $sidelinks);
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
