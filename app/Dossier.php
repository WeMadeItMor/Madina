<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use App\Quotation;

class Dossier extends Model
{
    protected $fillable = ['repertoire','nomDest','prenomDest','nomEnvoyeur','prenomEnvoyeur','regime','navire','nbrColis',
        'poids','depositaire','numConteneur','taille','type','pays','numBl','manifeste','declaration','douane',
        'article','inspecteur','droit','orbus','libelle','date','reçu','cheque',
        'acompte','reliquat','visa','visaTransit','visaDaf','datebea','slug','quitance',
        'copieDeclaration',
        'copieCheque','copieBon','copieBl','copieFacture','copieListe','copieNote','copieCarte','copieCMC',
        'dateDeclaration','case'];

    protected $dates = ['datebea','date','dateDeclaration'];





    public static function getDossier(){
        $dossier = DB::table('dossiers')
          //  ->select(['repertoire', 'nomDest', 'prenomDest', 'nomEnvoyeur'])
            ->where('case', '=', '0')
            ->get();
            return $dossier;
        }


    public static function getDossierAnnule(){
        $dossier = DB::table('dossiers')
            //  ->select(['repertoire', 'nomDest', 'prenomDest', 'nomEnvoyeur'])
            ->where('case', '=', '3')
            ->get();
        return $dossier;
    }



    public static function getDossierFinal(){
        $dossier = DB::table('dossiers')

            ->where('case', '=', '1')
            ->get();
        return $dossier;
    }
    public static function allDossier(){
        $dossier = DB::table('dossiers')


            ->get();
        return $dossier;
    }

    public static function dossierFinal(){
        $dossier = DB::table('dossiers')

            ->where('case', '=', '2')
            ->get();
        return $dossier;
    }

}