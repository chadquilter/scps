<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Mail\ReceiptMail;
use App\Contact;
use App\Http\Requests\storeContactPost as storeContactPost;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     private $links = array(
      'athletics' => array('link' => 'student-life/athletics', 'label' => 'Student Athletics'),
      'growth' => array('link' => 'student-life/growth', 'label' => 'Student Growth'),
    );

    protected function sidelinks(){
      return $this->links;
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
        $contact = new Contact;
        $contact->name = $request->input('name');
        $contact->notes = $request->input('notes');
        $contact->phone = $request->input('phone');
        $contact->email = $request->input('email');
        $contact->save();

        $to = explode(',', env('ADMIN_EMAILS'));
        $contact_subject = 'Space City Preparatory has recieved a meesage from '.$request->input('name');
        $reciept_subject = 'Message Sent, Thank-You '.$request->input('name').'!';
        Mail::to($to, 'SCPS Administration')->send(new ContactMail($contact));
        Mail::to($to, $request->input('name'))->send(new ReceiptMail($contact));

        //redirect or not
        return redirect()->back()->with('success', 'Message Sent! A representitive will contact you with further details.');
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
