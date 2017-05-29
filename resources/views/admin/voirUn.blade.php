@extends('admin.layout.main')
 
@section('content')
<div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Voir les réalisations de Madina Transit
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>  <a href="{{ route('adminhome') }}">Home</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-check"></i> voir 
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
<div class="row">
	<div class="container">
		<h1>Details sur {{ $realisation->title}} </h1> <br/>
			<div class="row">
            <div class="col-lg-6 thumb">
                <img class="thumbnail3" src="{{ asset('images').'/'.$realisation->imageName }}">
            </div>
				 <div class="col-lg-4">
                 <h3>{{ $realisation->title}} </h3>
				 		<p> {{ $realisation->description }}</p><a href="{{ route('voir') }}" class="btn btn-warning ">retour</a>

				 </div>
			</div>
			
		</div>
			
		
</div>

@endsection