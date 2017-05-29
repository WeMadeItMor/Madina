@extends('layout.main')


@section('content')


    <div class="row">
        <div class="container">
            <br/><h2>Nos Réalisations</h2><hr/>
        </div>

    </div>

    <div class="row">{{--
				<div class="col-lg-6 col-lg-offset-3">
				<h1>Liste des Réalisations</h1>
				<ul>
					@foreach($realisation as $realisations)


					<li>	<a>{{ $realisations->title }}</a> --  {{ $realisations->description }}

		<a href="{{ route('voirUn', ['slug' => $realisations->slug]) }}">Details</a></li>
					@endforeach
					</ul>
				</div> --}}

        <div class="container">

            @foreach($realisation as $realisations)
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail2" href="{{ route('voirReal', ['slug' => $realisations->slug]) }}">
                        <img src="{{ asset('images').'/'.$realisations->imageName }}">
                    </a>&nbsp;<p>{{ $realisations->title }}</p>
                </div>

            @endforeach
        </div>
        <div class="row">
            <div class="col-lg-6 col-lg-offset-5">
                {{ $realisation->links() }}
            </div>
        </div>

    </div>









@endsection