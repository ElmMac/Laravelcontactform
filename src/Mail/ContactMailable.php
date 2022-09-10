<?php

namespace Elmmac\Laravelcontactform\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $message;
    public $firstname;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message, $firstname)
    {
        //
        $this->message = $message;
        $this->firstname = $firstname;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('Laravelcontactform::contact.email')->with(
            [
            'message'=>$this->message,
            'firstname'=>$this->firstname
        ]
    );
    }
}
