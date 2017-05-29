<?php

namespace App\Http\Controllers;

use App\Dossier;

use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function pdf($slug)
    {
        $dossier= Dossier::where('slug', '=', $slug)->first();

        PDF::setOPtions(['logOutputFile' => '/Users/imac/lab/laravel Project/Madina/log.htm','debugCss' => true]);

        $pdf = PDF::loadView('admin.pdf',['dossier' => $dossier]);

        return $pdf->download('dossier.pdf');
    }
}
