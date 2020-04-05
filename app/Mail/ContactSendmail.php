<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactSendmail extends Mailable
{
    use Queueable, SerializesModels;

    protected $email;
    protected $contactitem;
    protected $messagebody;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($inputs)
    {
      $this->email = $inputs['email'];
      $this->contactitem = $inputs['contactitem'];
      $this->messagebody  = $inputs['messagebody'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      return $this
      ->from('kata.programming@gmail.com')
      ->subject('【けいげんクイズ】自動送信メール')
      ->bcc('kata.programming@gmail.com')
      ->view('contact.mail')
      ->with([
          'email' => $this->email,
          'contactitem' => $this->contactitem,
          'messagebody' => $this->messagebody,
      ]);
    }
}
