<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class ContactMail extends Mailable
{
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->from('example@email.com')
            ->to('example@email.com')
            ->subject('New contact message')
            ->view('pages.home', $this->data);
    }
}