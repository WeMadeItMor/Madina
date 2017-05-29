<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="panel d'administration du site">
    <meta name="author" content="WeMadeItin">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <title>BackOffice</title>

    <!-- Bootstrap Core CSS -->
    @yield('ass')
    <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('admin/css/sb-admin.css') }}" rel="stylesheet">
    {{--<link href="{{ asset('admin/assets/css/main.css') }}" rel="stylesheet">--}}

    <!-- Morris Charts CSS -->
    <link href="{{ asset('admin/css/plugins/morris.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('admin/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

</head>

<body>

    <div id="wrapper">

       @include('admin.header')
        <div id="page-wrapper">

            <div class="container-fluid">
                
                    @if(Session::has('success'))
                        <div class="alert alert-success">{{ Session::get('success') }}</div>
                    @endif

                    @if(Session::has('error'))
                        <div class="alert alert-danger">{{ Session::get('error') }}</div>
                    @endif
                    @yield('content')

                <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>


            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('admin/js/jquery.js') }}"></script>
    @yield('script')
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{ asset('admin/js/plugins/morris/raphael.min.js')}}" ></script>
    <script src=" {{ asset('admin/js/plugins/morris/morris.min.js') }} " ></script>
    <script src="{{asset('admin/js/plugins/morris/morris-data.js')}}"></script>

</body>

</html>
