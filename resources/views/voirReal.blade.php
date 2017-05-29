@extends('layout.main')


@section('content')

	<div class="row">
		<div class="container">
			<br/><h2>Nos Réalisations</h2><hr/>
		</div>
					
				</div>

	<div class="row">

		<div class="container">
		
			<div class="row">
           		 <div class="col-lg-6 thumb">
               		 	<img class="thumbnail3" src="{{ asset('images').'/'.$realisation->imageName }}">
           		 </div>
				 <div class="col-lg-4">
                 		<h3>{{ $realisation->title}} </h3>
				 		<p> {{ $realisation->description }}</p><a href="{{ route('realisation') }}" class="btn btn-warning ">retour</a>

				 </div>
			</div>
			
		</div>
	</div>	
			
			


@endsection