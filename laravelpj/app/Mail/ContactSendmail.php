<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactSendmail extends Mailable
{
    use Queueable, SerializesModels;

    private $name;
    private $email;
    private $postcode;
    private $address;
    private $builsing;
    private $opinion;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->name = $inputs['name'];
        $this->email = $inputs['email'];
        $this->postcode = $inputs['postcode'];
        $this->address = $inputs['address'];
        $this->builsing = $inputs['builsing'];
        $this->opinion = $inputs['opinion'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from('example@gmail.com')
            ->subject('自動送信メール')
            ->view('contact.mail')
            ->with([
                'email' => $this->email,
                'name' => $this->name,
                'address' => $this->address,
                'potcpde' => $this->postcode,
                'builsing' =>$this->builsing,
                'opinion' =>$this->opinion,
            ]);
        return $this->view('view.name');
    }
}
