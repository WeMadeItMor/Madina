@extends('admin.layout.main')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Supprimer les dossiers d'exportation de Madina Transit
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>  <a href="{{ route('adminhome') }}">Home</a>
                </li>
                <li class="active">
                    <i class="fa fa-check"></i> Tous les dossiers d'exportation
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            <h2>Supprimer des Dossiers Finalisés de MTTL</h2>
            <div class="table-responsive " style="border-radius: 6px;">
                <table class="table table-hover table-bordered" id="myTable" style="border-radius: 6px;
                background-color: lightpink;
                ">
                    <thead>
                    <tr>
                        <th>N° Répertoire</th>
                        <th>Nom Destinataire</th>
                        <th>Prénom Destinataire</th>
                        <th>Nature </th>
                        <th>Nombre de Collis </th>
                        <th>Volume </th>
                        <th>Etat</th>
                        <th>Supprimer</th>
                        <th>Afficher</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($export as $export)
                        <tr>
                            <td>{{ $export->repertoire }}</td>
                            <td>{{ $export->nomDest }}</td>
                            <td>{{ $export->prenomDest}}</td>
                            <td>{{ $export->nature}}</td>
                            <td>{{ $export->nbrColis}}</td>
                            <td>{{ $export->volume}}</td>
                            <td>
                                @if( $export->case == '1' )
                                    <p style="color: red">Déclaré</p>
                                @endif
                                @if( $export->case == '2' )
                                    <p style="color: deepskyblue">Complet</p>
                                @endif
                                @if( $export->case == '0' )
                                    <p style="color: seagreen">Ouvert</p>
                                @endif
                                @if( $export->case == '3' )
                                    <p style="color: darkgoldenrod">Annulé</p>
                                @endif
                            </td>

                            <td><a class="btn btn-sm btn-danger" href="{{ route('supprimerFinalExp' , ['slug' =>
                            $export->slug]) }}"><span class="glyphicon
                            glyphicon-plus-sign"></span> Supprimer</a></td>
                            <td><a class="btn btn-sm btn-success" href="{{ route('voirUnExp' , ['slug' =>
                            $export->slug])
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