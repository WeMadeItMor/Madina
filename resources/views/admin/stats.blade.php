@extends('admin.layout.main')



@section('ass')

    {!! Charts::assets() !!}


    @endsection
@section('content')


    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Statistique de Madina Transit
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>  <a href="{{ route('adminhome') }}">Home</a>
                </li>
                <li class="active">
                    <i class="fa fa-pie-chart"></i> Statistique
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <h1>Statistique sur l'Importation</h1> <hr/>
        <div class="col-lg-6 ">



                {!! $chart->render() !!}


        </div>
       <div class="col-lg-6 ">



            {!! $chart2->render() !!}


        </div>
        <div class="col-lg-6 ">



            {!! $chart3->render() !!}


        </div>

    </div><hr/>
    <div class="row">
        <h1>Statistique sur l'exportation</h1> <hr/>
       <div class="col-lg-6 ">



            {!! $chart4->render() !!}


        </div>
          <div class="col-lg-6 ">



              {!! $chart5->render() !!}


          </div>
    </div>

    <!-- /.row -->
@endsection