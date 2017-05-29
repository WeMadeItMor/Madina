@extends('admin.layout.main')


@section('content')


    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Ajoutez un Dossier d'importation
            </h1>

            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>  <a href="{{ route('adminhome') }}">Home</a>
                </li>
                <li class="active">
                    <i class="fa fa-edit"></i> compléter
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <h1>Compléter les informations du Dossier </h1><hr/>
        <form role="form" method="post" action="{{ route('completerDossierImport', ['slug' => $dossier->slug]) }}" enctype="multipart/form-data">
            <div class="col-lg-4">



                <div class="form-group">
                    <label>N° Manifeste</label>
                    <input class="form-control" name="manifeste" value="" required>
                    <p class="help-block">Obligatoire</p>
                </div>
                <div class="form-group">
                    <label>N° Déclaration</label>
                    <input class="form-control" name="declaration" value="" required>
                    <p class="help-block">Obligatoire</p>
                </div>
                <div class="form-group">
                    <label>Date Déclaration</label>
                    <input class="form-control" name="dateDeclaration" type="date" value="" required>
                    <p class="help-block">Obligatoire</p>
                </div>




            </div>
            <div class="col-lg-4">

                <div class="form-group">
                    <label>Nom Inspecteur</label>
                    <input class="form-control" name="inspecteur" value="" >
                    <p class="help-block">Optionnel</p>
                </div>

                <div class="form-group">
                    <label>Droits de Douane</label>
                    <input class="form-control" name="droit" value="" required>
                    <p class="help-block">Obligatoire</p>
                </div>





            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label>Valeur Douane</label>
                    <input class="form-control" name="douane" value="" required>
                    <p class="help-block">Obligatoire</p>
                </div>

                <div class="form-group">
                    <label>Numéro Article</label>
                    <input class="form-control" name="article" value="" required>
                    <p class="help-block">Obligatoire</p>
                </div>






            </div>



    </div>
    <div class="row">
        <div class="col-lg-6">
            <input type="hidden" name="slug" value="{{ $dossier->slug or '' }}" >
            <input type="hidden" name="_token" value="{{ csrf_token() }}" >
            <button type="submit" class="btn btn-success">Compléter le Dossier</button>
            <button type="reset" class="btn btn-danger">Annuler</button>
        </div>
    </div>
    </form>
    </div>
    <!-- /.row -->












@endsection