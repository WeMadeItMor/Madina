@extends('admin.layout.main')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Liste des dossiers d'Importations de Madina Transit
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>  <a href="{{ route('adminhome') }}">Home</a>
                </li>
                <li class="active">
                    <i class="fa fa-check"></i> Tous les dossiers d'importation
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            <h2>Dossiers d'importation de MTTL</h2>
            <div class="table-responsive " style="border-radius: 6px;">
                <table class="table table-hover table-bordered" id="myTable" style="border-radius: 6px;
                background-color: sandybrown;
                ">
                    <thead>
                    <tr>
                        <th>N° Répertoire</th>
                        <th>Nom Destinataire</th>
                        <th>Prénom Destinataire</th>
                        <th>Navire </th>
                        <th>Nombre de Collis </th>
                        <th>Numéro Conteneur</th>
                        <th>Etat</th>
                        <th>Action</th>
                        <th>Afficher</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($dossier as $dossiers)
                        @if( $dossiers->case == '1' )
                                <tr class="danger">
                            @endif
                        @if( $dossiers->case == '0' )
                            <tr class="info">
                                @endif
                        @if( $dossiers->case == '2' )
                            <tr class="success">
                                @endif
                        @if( $dossiers->case == '3' )
                            <tr class="warning">
                                @endif
                            <td>{{ $dossiers->repertoire }}</td>
                            <td>{{ $dossiers->nomDest }}</td>
                            <td>{{ $dossiers->prenomDest}}</td>
                            <td>{{ $dossiers->navire}}</td>
                            <td>{{ $dossiers->nbrColis}}</td>
                            <td>{{ $dossiers->numConteneur}}</td>
                            <td>
                                    @if( $dossiers->case == '1' )
                                        <p style="color: red">Déclaré</p>
                                    @endif
                                    @if( $dossiers->case == '2' )
                                        <p style="color: deepskyblue">Complet</p>
                                    @endif
                                    @if( $dossiers->case == '0' )
                                        <p style="color: seagreen">Ouvert</p>
                                    @endif
                                    @if( $dossiers->case == '3' )
                                        <p style="color: darkgoldenrod">Annulé</p>
                                    @endif
                            </td>

                            <td>
                                @if( $dossiers->case == '3' )
                                <a class="btn btn-sm btn-danger" href="{{ route('supprimerFinal' , ['slug' =>
                            $dossiers->slug]) }}">
                                    <span class="glyphicon
                            glyphicon-plus-sign"></span> Supprimer
                                </a>
                                    @else
                                    <a class="btn btn-sm btn-warning" href="{{ route('annulerDossier' , ['slug' =>
                            $dossiers->slug]) }}">
                                    <span class="glyphicon
                            glyphicon-plus-sign"></span> Annuler
                                    </a>
                                    @endif
                            </td>
                            <td><a class="btn btn-sm btn-success" href="{{ route('voirUnImport' , ['slug' => $dossiers->slug])
                            }}"><span class="glyphicon glyphicon-eye-open"></span> voir</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- /.row -->
    </div>

    <!-- /.row -->

    <div class="row">
        <div class="col-lg-6 col-lg-offset-5">

        </div>
    </div>


    </div>



@endsection

@section('script')

    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>


    <script>
        /* $(document).ready(function(){
         $('#myTable').DataTable();

         });*/
        $(document).ready(function() {
            $('#myTable').DataTable( {
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
                }
            } );
        } );
    </script>



@endsection