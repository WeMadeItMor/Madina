<?php

namespace App\Http\Controllers;

use App\Dossier;
use App\Http\Requests;
use App\User;
use Yajra\Datatables\Datatables;

class DatatablesController extends Controller
{
    /**
     * Displays datatables front end view
     *
     * @return \Illuminate\View\View
     */
    public function getIndex()
    {
        return view('admin.voirDossierImport');
    }

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData(Datatables $dossier)
    {



        $dossier = Dossier::getDossier();

        return Datatables::of($dossier)->make('admin.voirDossierImport',[
            'dossier' => Dossier::getDossier()
        ]);
    }
}