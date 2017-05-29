@extends('admin.layout.main')
 
@section('content')

 <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Supprimer des réalisations de Madina Transit
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>  <a href="{{ route('adminhome') }}">Home</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-remove"></i> supprimer 
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
<div class="row">
    <div class="col-lg-12">
                        <h2>Liste des Réalisation</h2>
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Date</th>
                                        <th>Supprimer</th>
                                        <th>Afficher</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($realisation as $realisations)
                                    <tr>
                                        <td>{{ $realisations->id }}</td>
                                        <td>{{ $realisations->title }}</td>
                                        <td>{{ $realisations->description}}</td>
                                        <td>{{ $realisations->created_at}}</td>
                   <td><a class="btn btn-danger" href="{{ route('supprimer' , ['slug' => $realisations->slug])
                   }}">Supprimer</a></td>
                    <td><a class="btn btn-success" href="{{ route('voirUn' , ['slug' => $realisations->slug])
                    }}">Voir</a></td>
                                    </tr>
                                 @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                
                <!-- /.row -->
</div>

                <!-- /.row -->
@endsection