<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AboutController extends Controller
{
    public function store(Request $request)
    {


        \Mail::send('contact',
            array(
                'nom' => $request->get('nom'),
                'email' => $request->get('email'),
                'contenus' => $request->get('contenus')
            ), function($message)
            {
                $message->from('no-reply@madina.com');
                $message->to('papamorniane@gmail.com', 'Admin')->subject('Madina Feedback');
            });

        return redirect()->route('home');



    }
}
