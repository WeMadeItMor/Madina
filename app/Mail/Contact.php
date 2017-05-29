<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {




        \Mail::send('contact',
            array(
                'nom' => $request->get('nom'),
                'email' => $request->get('email'),
                'contenus' => $request->get('contenus')
            ), function($message)
            {
                $message->from('no-reply@madina.com');
                $message->to('Vanmoustapha@gmail.com', 'Admin')->subject('Madina Feedback');
            });

      //  return redirect()->route('home');

       // return $this->view('contact');
    }
}
