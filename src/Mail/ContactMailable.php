<?php

namespace Mahfouz\Contact\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $username;
    public $message;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($username,$message)
    {
        $this->username = $username;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('contact::contact.email')->with([
            'username' => $this->username,
            'message' => $this->message,
        ]);
    }
}
