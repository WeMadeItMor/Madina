@extends('admin.layout.main')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Voir les dossiers d'Exportations de Madina Transit
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>  <a href="{{ route('adminhome') }}">Home</a>
                </li>
                <li class="active">
                    <i class="fa fa-check"></i> Dossiers Annulé
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            <h2>Liste des Dossiers d'exportations annulés</h2>
            <div class="table-responsive " style="border-radius: 6px;">
                <table class="table table-hover table-responsive" id="myTable" style="border-radius: 6px;
                background-color: darkcyan;">
                    <thead>
                    <tr>
                        <th>N° Répertoire</th>
                        <th>Nom Destinataire</th>
                        <th>Prénom Destinataire</th>

                        <th>Nature</th>


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