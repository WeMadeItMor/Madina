@extends('admin.layout.main')
 
@section('content')
<div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Back Office de Madina
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>  <a href="{{ route('adminhome') }}">Home</a>
                            </li>
                            
                        </ol>
                    </div>
</div>
                <!-- /.row -->

<div class="row">
	<div class="jumbotron col-lg-12 ">
		<div class="title">
		@if(Auth::check())
			<h1>Bienvenue {{ Auth::User()->name }}</h1>

		@endif
			
			<p>Dans le panneau de configuration de Madina Transit vous pouvez ajouter, supprimer,visualiser les
                réalisations</p>
            <p>Mais aussi consulter ,ajoutez ou supprimer un dossier</p>
            <a class="btn btn-primary" href="{{route('getPanel')}}"><i class="fa fa-fw fa-align-right"></i> Import</a>
            <a class="btn btn-success" href="{{ route('panelExport') }}"><i class="fa fa-fw fa-align-left"></i>
                Export</a>
		</div>





	</div>

	
		
			{{-- <div class="row">
				<div class="col-lg-6 col-lg-offset-3">
				<h1>Liste des Personnes inscrites</h1>
				<ul> --}}
					{{-- @foreach($info as $infos)


					<li>	<a>{{ $infos->nom }}</a> --  {{ $infos->text }}
						
		<a href="{{ route('showInfo', ['slug' => $infos->slug]) }}">Details</a></li>
					@endforeach --}}
				{{-- 	</ul>
				</div>
				
			</div> --}}
			
		
</div>

@endsection