<?php

namespace App\Mail;

use App\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Carbon\Carbon;

class ReceiptMail extends Mailable
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
        $this->to($this->contact->email, $this->contact->name);
        $to = explode(',', env('ADMIN_EMAILS'));
        $this->cc($to, 'SCPS Administration');
        $this->subject('Hello '.$this->contact->name.', thanks for contacting Space City Preparatory!');
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $date = Carbon::now()->toDateTimeString();
        return $this->view('emails.reciept')
            ->with([
                'contactName' => $this->contact->name,
                'contactPhone' => $this->contact->phone,
                'contactEmail' => $this->contact->email,
                'contactNotes' => $this->contact->notes,
                'contactDate' => $date,
            ]);
    }
}
