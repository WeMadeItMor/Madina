<?php

namespace App\Http\Controllers;

use App\Dossier;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Input;
use App\Realisation;
use View;
use Auth;
use Datatables;
use Charts;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getStats()
    {
     $chart = Charts::database(Dossier::all(),'bar', 'highcharts')
            ->title('Nombre de Dossier par état')
            ->labels(['Ouverts', 'Déclarés', 'Complets','Annulés'])

            ->elementlabel("Totals des dossiers")
            ->dimensions(1000,500)
            ->responsive(true)
            ->groupBy('case' ,null, [0 => 'Ouverts', 1 => 'Déclarés', 2 => 'Complets', 3 => 'Annulés'])
            ->colors(['#f1c40f','#1abc9c','#3498db','#e67e22']);


        $chart2 = Charts::database(Dossier::all(),'line', 'highcharts')
            ->title('Nombres de dossiers par Mois')

            ->elementlabel("Totals des dossiers")
            ->dimensions(1000,500)
            ->responsive(true)
            ->groupByMonth()
            ->colors(['#f1c40f','#1abc9c','#3498db','#e67e22']);

        $chart3 = Charts::database(Dossier::all(),'pie', 'highcharts')
            ->title('Nombres de dossiers par Pays')

            ->elementlabel("Totals des dossiers")
            ->dimensions(1000,500)
            ->responsive(true)
            ->groupBy('pays')
            ->colors(['#f1c40f','#1abc9c','#3498db','#e67e22','#9b59b6']);





        return view('admin.stats',['chart' => $chart,'chart2' => $chart2,'chart3' => $chart3]);
    }




    // ALLER A LA PAGE D'AJOUT DE DOSSIER

    public function getAjoutDossier()
    {

        return view('admin.ajoutDossier');
    }



    // AJOUT DOSSIER IMPORTATION

    public function ajoutDossier(Request $request)
    {
        $parameters = $request->except(['_token']);
        $date = new \DateTime(null);
        $this->validate($request,[
            'repertoire' => 'required',
            'nomDest' => 'required',
            'prenomDest' => 'required',
            'nomEnvoyeur' => 'required',
            'prenomEnvoyeur' => 'required',
            'regime' => 'required',
            'navire' => 'required',
            'nbrColis' => 'required',
            'poids' => 'required',
            'depositaire' => 'required',
            'numConteneur' => 'required',
            'taille' => 'required',
            'type' => 'required',
            'pays' => 'required',
            'numBl' => 'required'
        ]);
        $dossier = new Dossier([
            'repertoire' => $request->input('repertoire'),
            'nomDest' => $request->input('nomDest'),
            'prenomDest' => $request->input('prenomDest'),
            'nomEnvoyeur' => $request->input('nomEnvoyeur'),
            'prenomEnvoyeur' => $request->input('prenomEnvoyeur'),
            'regime' => $request->input('regime'),
            'navire' => $request->input('navire'),
            'nbrColis' => $request->input('nbrColis'),
            'poids' => $request->input('poids'),
            'depositaire' => $request->input('depositaire'),
            'numConteneur' => $request->input('numConteneur'),
            'taille' => $request->input('taille'),
            'type' => $request->input('type'),
            'pays' => $request->input('pays'),
            'numBl' => $request->input('numBl'),
        ]);
        $dossier->slug = Str::slug($parameters['repertoire'] . $date->format('dmYhis'));

        $dossier->save();

        return redirect()->route('adminhome')->with("success", "Vous venez d'ajouter un Dossier");
    }




    // Voir la liste des dossier à finaliser


    public function voirFinalDossier()
    {
        $dossier = Dossier::getDossierFinal();

        return view::make('admin.voirFinalDossier',[
            'dossier' => Dossier::getDossierFinal()
        ]);

    }


    // ALLER A LA PAGE DE FINALISATION

    public function getFinaliserImport($slug)
    {

        $dossier= Dossier::where('slug', '=', $slug)->first();

        return view('admin.finaliserDossierImport')->with('dossier', $dossier);
    }


    //ALLER A LA PAGE DE SUPPRESSION

    public function getsupprimerFinal()
    {
        $dossier = Dossier::allDossier();

        return view::make('admin.supprimerFinal',[
            'dossier' => Dossier::allDossier()
        ]);
    }

    //SUPPRIMER UN DOSSIER

    public function supprimerFinal($slug)
    {
        $dossier= Dossier::where('slug', '=', $slug)->first();
        $dossier->delete();

        return redirect()->route('dossierFinals')->with('success', 'Dossier supprimer avec succés.');
    }



    // FINALISER UN DOSSIER


    public function finaliserDossier(Request $request)
    {


        if ($request->isMethod('post')) {
            $parameters = $request->except(['_token']);
            $dossier= Dossier::where('slug', '=', $parameters['slug'])->first();
            $dossier->orbus = $parameters['orbus'];
            $dossier->libelle = $parameters['libelle'];
            $dossier->reçu = $parameters['reçu'];
            $dossier->date = $parameters['date'];
            $dossier->datebea = $parameters['datebea'];
            $dossier->cheque = $parameters['cheque'];
            $dossier->acompte = $parameters['acompte'];
            $dossier->reliquat = $parameters['reliquat'];
            $dossier->case = '2';



            if (Input::hasFile('copieBl')) {
                $file1=Input::file('copieBl');

                $file1->move(public_path().'/doc',$file1->getClientOriginalName());
                $dossier->copieBl = $file1->getClientOriginalName();
            }




            if (Input::hasFile('quitance')) {
                $file2=Input::file('quitance');

                $file2->move(public_path().'/doc',$file2->getClientOriginalName());
                $dossier->quitance = $file2->getClientOriginalName();

            }



            if (Input::hasFile('copieBon')) {
                $file3=Input::file('copieBon');

                $file3->move(public_path().'/doc',$file3->getClientOriginalName());
                $dossier->copieBon = $file3->getClientOriginalName();

            }



            if (Input::hasFile('copieCheque')) {
                $file4=Input::file('copieCheque');

                $file4->move(public_path().'/doc',$file4->getClientOriginalName());
                $dossier->copieCheque = $file4->getClientOriginalName();

            }




            if (Input::hasFile('copieDeclaration')) {
                $file5=Input::file('copieDeclaration');

                $file5->move(public_path().'/doc',$file5->getClientOriginalName());
                $dossier->copieDeclaration = $file5->getClientOriginalName();

            }


            if (Input::hasFile('copieFacture')) {
                $file6=Input::file('copieFacture');

                $file6->move(public_path().'/doc',$file6->getClientOriginalName());
                $dossier->copieFacture = $file6->getClientOriginalName();

            }


            if (Input::hasFile('copieListe')) {
                $file7=Input::file('copieListe');

                $file7->move(public_path().'/doc',$file7->getClientOriginalName());
                $dossier->copieListe = $file7->getClientOriginalName();

            }



            if (Input::hasFile('copieNote')) {
                $file8=Input::file('copieNote');

                $file8->move(public_path().'/doc',$file8->getClientOriginalName());
                $dossier->copieNote = $file8->getClientOriginalName();

            }



            if (Input::hasFile('copieCarte')) {
                $file9=Input::file('copieCarte');

                $file9->move(public_path().'/doc',$file9->getClientOriginalName());
                $dossier->copieCarte = $file9->getClientOriginalName();

            }




            if (Input::hasFile('copieCMC')) {
                $file=Input::file('copieCMC');

                $file->move(public_path().'/doc',$file->getClientOriginalName());
                $dossier->copieCMC = $file->getClientOriginalName();

            }



            $dossier->save();

            return redirect()->route('adminhome')->with('success', 'Dossier Finaliser.');

        }

        return view('form')->with('dossier', $dossier);
    }


    // VOIR TOUS LES DOSSIERS FINALISÉS

    public function dossierFinal()
    {
        $dossier = Dossier::dossierFinal();

        return view::make('admin.dossierFinals',[
            'dossier' => Dossier::dossierFinal()
        ]);
    }




    //VOIR TOUS LES DOSSIER ANNULES

    public function voirDossierAnnule()
    {
        $dossier = Dossier::getDossierAnnule();

        return view::make('admin.voirDossierAnnule',[
            'dossier' => Dossier::getDossierAnnule()
        ]);
    }


    //VOIR TOUS LES DOSSIER A COMPLETER

    public function voirDossierImport()
    {
        $dossier = Dossier::getDossier();

        return view::make('admin.voirDossierImport',[
        'dossier' => Dossier::getDossier()
      ]);
    }


    // VOIR UN DOSSIER D'IMPORTATION

    public function voirUnImport($slug)
    {

        $dossier= Dossier::where('slug', '=', $slug)->first();

        return view('admin.voirUnImport')->with('dossier', $dossier);

    }



    // ALLER A LA PAGE DE COMPLEMENT DE DOSSIER OUVERT


    public function getCompleterDossierImport($slug)
    {

        $dossier= Dossier::where('slug', '=', $slug)->first();

        return view('admin.completerDossierImport')->with('dossier', $dossier);
    }


    // COMPLETER UN DOSSIER OUVERTS


    public function postCompleteDossierImport(Request $request)
    {


        if ($request->isMethod('post')) {
            $parameters = $request->except(['_token']);
            $dossier= Dossier::where('slug', '=', $parameters['slug'])->first();
            $dossier->manifeste = $parameters['manifeste'];
            $dossier->declaration = $parameters['declaration'];
            $dossier->inspecteur = $parameters['inspecteur'];
            $dossier->droit = $parameters['droit'];
            $dossier->dateDeclaration = $parameters['dateDeclaration'];
            $dossier->douane = $parameters['douane'];
            $dossier->article = $parameters['article'];
            $dossier->case = '1';


            $dossier->save();

            return redirect()->route('adminhome')->with('success', 'Dossier Compléter.');

        }

        return view('completerDossierImport')->with('dossier', $dossier);
    }

    // ANNULER DOSSIER



    public function annulerDossier($slug)
    {



            $dossier= Dossier::where('slug', '=', $slug)->first();
            $dossier->case = '3';


            $dossier->save();

            return redirect()->route('adminhome')->with('success', 'Dossier Annulé.');



    }











    // REALISATIONS

    // AJOUTER REALISATION

    public function ajouter(Request $request)
    {
        $parameters = $request->except(['_token']);
        $realisation = new Realisation();
        $date = new \DateTime(null);
        $realisation->title = $parameters['title'];
        if (Input::hasFile('image')) {
            $file=Input::file('image');

            $file->move(public_path().'/images',$file->getClientOriginalName());
        }

        $realisation->imageName = $file->getClientOriginalName();
        $realisation->description = $parameters['description'];
        $realisation->slug = Str::slug($parameters['title'] . $date->format('dmYhis'));

        $realisation->save();


        return redirect()->route('adminhome')->with("success", "Vous venez d'ajouter une réalisation");
    }


    // VOIR TOUTES LES REALISATIONS

    public function voir()
    {
        $realisation = Realisation::all();


        return view::make('admin.voir',[
            'realisation' => Realisation::paginate(4)
        ]);
    }


    // VOIR UNE SEULE REALISATION

    public function voirUn($slug)
    {

        $realisation= Realisation::where('slug', '=', $slug)->first();

        return view('admin.voirUn')->with('realisation', $realisation);

    }

    // SUPPRIMER UNE REALISATION

    public function supprimer($slug)
    {
        $realisation= Realisation::where('slug', '=', $slug)->first();
        $realisation->delete();

        return redirect()->route('getsupprimer')->with('success', 'Realisation supprimer.');
    }


    //PAGES POUR VOIR UNE SEULE REALISATION
    public function getVoir()
    {
        return view('admin.voir');
    }


    // ALLER A LA PAGE D'ACCUEIL D'ADMINISTRATION

    public function getadminhome()
    {
        return view('admin.adminhome');
    }


    //ALLER PAGE D'AJOUT DE DOSSIER

    public function getAjout()
    {
        return view('admin.ajouter');
    }


    //ALLER PAGE DE TOUS LES DOSSIER D'IMPORT

    public function getPanel()
    {

        $dossier = Dossier::allDossier();
        return view::make('admin.panel',[
            'dossier' => Dossier::allDossier()
        ]);
    }


    // ALLER PAGE DE TOUS LES DOSSIER D'EXPORT

    public function getPanelExport()
    {
        return view('admin.panelExport');
    }


    //PAGE DE SUPPRESSION DE REALISATION

    public function getSupprimer()
    {
        $realisation = Realisation::all();

        return view('admin.getsupprimer')->with('realisation', $realisation);
    }




}
