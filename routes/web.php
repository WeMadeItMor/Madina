<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// ROUTES SITES WEB

//ROUTE HOME

Route::get('/', [
    'as' => 'home',
    'uses' => 'HomeController@getHome'
]);

// ROUTES DES REALISATIONS

Route::get('/realisation', [
    'as' => 'realisation',
    'uses' => 'HomeController@getReal'
]);

// VOIR UNE REALISATION

Route::get('voirReal/{slug}', [
    'as' => 'voirReal',
    'uses' => 'HomeController@voirReal'
]);


// CONTACTS

Route::match(['get','post'],'/contact', [
    'as' => 'contact',
    'uses' => 'AboutController@store'
]);



/*
Route::match(['get','post'],'/contact', function () {
    // send an email to "batman@batcave.io"
   // Mail::to('papamorniane@gmail.com')->send(new \App\Mail\Contact());

    return view('home');
})->name('contact');*/



//ADMINISTRATION ROUTE

Route::get('admin/user/login',[
    'as' => 'login',
    'uses' => 'UserController@login'
]);
Route::get('admin/user/logout',[
    'as' => 'logout',
    'uses' => 'UserController@logout'
]);

Route::post('admin/user/signin',[
    'as' => 'signin',
    'uses' => 'UserController@signin'

]);
Route::post('admin/user/register',[
    'as' => 'register',
    'uses' =>  'UserController@register'

]);


// FIN DES ROUTES DE CONNECTION

Route::get('admin/adminhome', [
    'as' => 'adminhome',
    'uses' => 'AdminController@getadminhome',

]);

// AJOUT DE REALISATIONS

Route::post('admin/ajouter', [
    'as' => 'ajouter',
    'uses' => 'AdminController@ajouter'
]);
Route::get('admin/ajouter', [
    'as' => 'ajouter',
    'uses' => 'AdminController@getAjout'
]);

// SUPPRIMER REALISATION

Route::get('admin/getsupprimer/{slug}', [
    'as' => 'supprimer',
    'uses' => 'AdminController@supprimer'
]);

Route::get('admin/supprimer/', [
    'as' => 'getsupprimer',
    'uses' => 'AdminController@getSupprimer'
]);

// VOIR REALISATIONS

Route::get('admin/voir', [
    'as' => 'voir',
    'uses' => 'AdminController@voir'
]);
Route::get('admin/voirUn/{slug}', [
    'as' => 'voirUn',
    'uses' => 'AdminController@voirUn'
]);



Route::get('admin/stats', [
    'as' => 'stats',
    'uses' => 'AdminController@getStats'
]);

Route::get('admin/pdf/{slug}', [
    'as' => 'pdf',
    'uses' => 'PDFController@pdf'
]);


// IMPORTATION

Route::get('admin/panel', [
    'as' => 'getPanel',
    'uses' => 'AdminController@getPanel'
]);

Route::get('admin/panelExport', [
    'as' => 'panelExport',
    'uses' => 'AdminController@getPanelExport'
]);

// AJOUTER UN DOSSIER D'IMPORT

Route::post('admin/ajoutDossier', [
    'as' => 'ajoutDossier',
    'uses' => 'AdminController@ajoutDossier'
]);
Route::get('admin/ajoutDossier', [
    'as' => 'ajoutDossier',
    'uses' => 'AdminController@getAjoutDossier'
]);


// COMPLETER UN DOSSIER OUVERT

Route::get('admin/completerDossierImport/{slug}', [
    'as' => 'getcompleterDossierImport',
    'uses' => 'AdminController@getCompleterDossierImport'
]);
Route::post('admin/completerDossierImport', [
    'as' => 'completerDossierImport',
    'uses' => 'AdminController@postCompleteDossierImport'
]);


// FINALISER UN DOSSIER D'IMPORT

Route::get('admin/finaliserDossierImport/{slug}', [
    'as' => 'getFinaliserImport',
    'uses' => 'AdminController@getFinaliserImport'
]);

Route::post('admin/finaliserDossier', [
    'as' => 'finaliserDossier',
    'uses' => 'AdminController@finaliserDossier'
]);

// SUPPRIMER UN DOSSIER FINALISÉ
Route::get('admin/supprimerFinal/{slug}', [
    'as' => 'supprimerFinal',
    'uses' => 'AdminController@supprimerFinal'
]);

Route::get('admin/getsupprimerFinal', [
    'as' => 'getsupprimerFinal',
    'uses' => 'AdminController@getsupprimerFinal'
]);


// VOIR UN DOSSIER D'IMPORT

Route::get('admin/voirUnImport/{slug}', [
    'as' => 'voirUnImport',
    'uses' => 'AdminController@voirUnImport'
]);


// VOIR DOSSIER IMPORT OUVERT

Route::get('admin/voirDossierImport', [
    'as' => 'voirDossierImport',
    'uses' => 'AdminController@voirDossierImport'
]);

// VOIR DOSSIER IMPORT ANNULER

Route::get('admin/voirDossierAnnule', [
    'as' => 'voirDossierAnnule',
    'uses' => 'AdminController@voirDossierAnnule'
]);

// ANNULER DOSSIER


Route::match(['get','post'],'admin/annulerDossier/{slug}', [
    'as' => 'annulerDossier',
    'uses' => 'AdminController@annulerDossier'
]);



/*Route::get('datatables', [
    'anyData'  => 'datatables.data',

    'uses' => 'DatatablesController@anydata'
]);*/


// VOIR DOSSIER FINAUX D'IMPORTS

Route::get('admin/dossierFinals', [
    'as' => 'dossierFinals',
    'uses' => 'AdminController@dossierFinal'
]);


Route::get('admin/voirFinalDossier', [
    'as' => 'voirFinalDossier',
    'uses' => 'AdminController@voirFinalDossier'
]);



