<?php

namespace App\Http\Controllers;

use Mail;
use App\Mail\AmazonSes;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{

  public function send(Request $request)
  {
    $timestamp = date("mdyHi");

    // Validate form data
    $data = request()->validate([
      'first_name' => 'required|string|max:255',
      'last_name' => 'required|string|max:255',
      'email' => 'required|string|email|max:255',
      'contact_number' => '',
      'company' => 'required|string|max:255',
      'department' => '',
      'position' => '',
      'interest' => 'required',
      'heard_about' => '',
      'text_message' => '',
      'g-recaptcha-response' => 'required|captcha',
    ]);
    //dd($data);

    $contact = array(
      'first_name' => request('first_name'),
      'last_name' => request('last_name'),
      'email' => request('email'),
      'contact_number' => request('contact_number'),
      'company' => request('company'),
      'department' => request('department'),
      'position' => request('position'),
      'interest' => request('interest'),
      'heard_about' => request('heard_about'),
      'text_message' => request('text_message'),
      'template' => '',
      'heading' => '',
      'timestamp' => $timestamp
    );
    //dd($contact);

    $contact['template'] = 'contact-request-tpl';
    $contact['heading'] = 'New contact form submission from SimcoLtd.com!';
    //dd($contact);
    Mail::to('info@simcoltd.com')->send(new AmazonSes($contact));

    return back()->with('success', 'Thanks for contacting us! We will get back to you shortly.');
  }

}
