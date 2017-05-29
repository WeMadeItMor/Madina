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
	
	<div class="col-lg-12">
                <h1 class="page-header">Liste des Réalisations</h1>
            </div>
@foreach($realisation as $realisations)
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail2" href="{{ route('voirUn', ['slug' => $realisations->slug]) }}">
                    <img src="{{ asset('images').'/'.$realisations->imageName }}">	
                </a>
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