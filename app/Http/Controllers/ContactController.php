<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Http\Requests\storeContactPost as storeContactPost;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     private function sidelinks(){
       $links = array(
        'athletics' => array('link' => 'athletics', 'label' => 'Student Athletics'),
        'growth' => array('link' => 'growth', 'label' => 'Student Growth'),
      );
      return $links;
     }

    public function index()
    {
        //
        $title = 'Contact Us!';
        $sidelinks = $this->sidelinks();
        return view('contact.create')
          ->with('sidelinks', $sidelinks)
          ->with('title', $title);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Contact Us!';
        $sidelinks = $this->sidelinks();
        return view('contact.create')
          ->with('sidelinks', $sidelinks)
          ->with('title', $title);
    }

    /**
     * Store a newly created resource in storage.
     *
     *
     * @param  StoreContactPost  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeContactPost $request)
    {
        $contact = new contacts;
        $contact->title = $request->input('name');
        $contact->notes = $request->input('notes');
        $contact->phone = $request->input('phone');
        $contact->email = $request->input('email');
        $contact->save();

        //$to = explode(',', env('ADMIN_EMAILS'));
        //Mail::to($to)->cc('chadquilter@gmail.com')->send(new ContactMail($contact));

        return redirect('/contact')->with('success', 'Message Sent! A representitive will contact you with further details.');
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
