<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Realisation;
use View;

class HomeController extends Controller
{
    public function getHome()
    {
        return view('home');
    }
    public function getReal()
    {
        $realisation = Realisation::all();
        return view::make('realisation',[
            'realisation' => Realisation::paginate(4)
        ]);
    }

    public function voirReal($slug)
    {

        $realisation= Realisation::where('slug', '=', $slug)->first();
        return view('voirReal')->with('realisation', $realisation);

    }
}
