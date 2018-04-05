<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Contact;
use App\Http\Requests\storeContactPost as storeContactPost;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     private $is_mini = 'contact';
     private $links = array(
      'athletics' => array('link' => 'athletics', 'label' => 'Student Athletics'),
      'growth' => array('link' => 'growth', 'label' => 'Student Growth'),
    );

     private function setMini(){
       $this->is_mini = $this->Request::url();
     }

     /* get mini value */
     private function getMini(){
       return $this->is_mini;
     }

    protected function sidelinks(){
      return $this->links;
     }


     //check url before doing redirect
    protected function store_redirect() {
      return redirect('\$this->getMini()')->with('success', 'Message Sent! A representitive will contact you with further details.');
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
        Mail::to($to)->cc('chadquilter@gmail.com')->send(new ContactMail($contact));
        //redirect or not
        $this->store_redirect();
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
