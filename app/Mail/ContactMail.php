<?php

namespace App\Mail;

use App\Quote;
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

    public function __construct(Quote $contact)
    {
        $this->contact = $contact;
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
                'contactTitle' => $this->contact->title,
                'contactPhone' => $this->contact->phone,
                'contactEmail' => $this->contact->email,
                'contactDescription' => $this->contact->description,
                'contactNotes' => $this->contact->notes,
                'contactDate' => $date,
            ]);
    }
}
