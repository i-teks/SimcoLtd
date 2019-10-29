<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AmazonSes extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The order instance.
     *
     * @var Contact
     */
    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
     public function __construct($data)
     {
         $this->data = $data;
         $this->first_name = $data['first_name'];
         $this->last_name = $data['last_name'];
         $this->email = $data['email'];
         $this->contact_number = $data['contact_number'];
         $this->company = $data['company'];
         $this->department = $data['department'];
         $this->position = $data['position'];
         $this->interest = $data['interest'];
         $this->heard_about = $data['heard_about'];
         $this->text_message = $data['text_message'];
         $this->template = $data['template'];
         $this->heading = $data['heading'];
     }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      return $this->view('layout.emails.' . $this->template)
                  ->with('data', $this->data)
                  ->from('mayres@simcoltd.com', 'Simco Ltd: no-reply')
                  ->replyTo($this->email, $this->first_name . ' ' . $this->last_name)
                  ->subject($this->heading);
    }
}
