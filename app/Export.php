<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use App\Quotation;

class Export extends Model
{
    protected $fillable = ['repertoire','nomDest','prenomDest','nbrColis',
        'poids','depositaire','numConteneur','taille','type','pays','numBl','manifeste','declaration','douane',
        'nature','volume','factureFour','adresse','bureau','copieCo','droit','orbus','libelle','date','reçu','cheque',
        'acompte','reliquat','datebea','slug','quitance',
        'copieDeclaration',
        'copieCheque','copieBon','copieBl','copieFacture','copieListe','copieNote','copieCarte','copieCMC',
        'dateDeclaration','case'];

    protected $dates = ['datebea','date','dateDeclaration'];



    public static function getDossierExp(){
        $exports = DB::table('exports')
            //  ->select(['repertoire', 'nomDest', 'prenomDest', 'nomEnvoyeur'])
            ->where('case', '=', '0')
            ->get();
        return $exports;
    }


    public static function getDossierAnnuleExp(){
        $exports = DB::table('exports')
            //  ->select(['repertoire', 'nomDest', 'prenomDest', 'nomEnvoyeur'])
            ->where('case', '=', '3')
            ->get();
        return $exports;
    }



    public static function getDossierFinalExp(){
        $exports = DB::table('exports')

            ->where('case', '=', '1')
            ->get();
        return $exports;
    }
    public static function allDossierExp(){
        $exports = DB::table('exports')


            ->get();
        return $exports;
    }

    public static function dossierFinalExp(){
        $exports = DB::table('exports')

            ->where('case', '=', '2')
            ->get();
        return $exports;
    }
}
