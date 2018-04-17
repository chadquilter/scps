<?php

namespace App\Mail;

use App\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Carbon\Carbon;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $contact;

    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
        $to = explode(',', env('ADMIN_EMAILS'));
        $this->to($to, 'SCPS Administration');
        $this->from('kendall@spacecityschool.com', 'SCPS Administration');
        //add subject line to contact
        $subject = 'Hello, a contact has been sent from '.$this->contact->name.' to Space City Preparatory.';
        $this->subject($subject);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $date = Carbon::now()->toDateTimeString();
        return $this->view('emails.contact')
            ->with([
                'contactName' => $this->contact->name,
                'contactPhone' => $this->contact->phone,
                'contactEmail' => $this->contact->email,
                'contactNotes' => $this->contact->notes,
                'contactDate' => $date,
            ]);
    }
}
