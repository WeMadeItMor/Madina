@extends('admin.layout.main')
 
@section('content')

 <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Ajoutez des réalisations de Madina Transit
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>  <a href="{{ route('adminhome') }}">Home</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> ajouter 
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3">
        <h1>Ajoutez une réalisation</h1>
                <form role="form" method="post" action="{{ route('ajouter') }}" enctype="multipart/form-data">

                                    <div class="form-group">
                                        <label>Titre</label>
                                        <input class="form-control" name="title" value="{{ $realisation->title or '' }}" required>
                                        <p class="help-block">Mettez un Titre correct svp...</p>
                                    </div>

                                   
                                
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" name="image">
                                    </div>

                                <div class="form-group">
                                    <label>Description </label>
                                    <textarea required class="form-control" rows="3" name="description">{{ $realisation->description or '' }}</textarea>
                                </div>

                                
                                <input type="hidden" name="slug" value="{{ $realisation->slug or '' }}" >
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                                <button type="submit" class="btn btn-success">Ajouter</button>
                                <button type="reset" class="btn btn-danger">Annuler</button>

                            </form>

                        </div>
                    
                    </div>
                </div>
                <!-- /.row -->
@endsection