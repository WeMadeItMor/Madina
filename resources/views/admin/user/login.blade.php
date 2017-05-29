@extends('admin/user/main')

@section('content')
<p align="center"><h1 style="color: white;text-align: center">Panel d'administration de Madina Transit</h1></p>


                    <div class="col-lg-6 col-lg-offset-3">
                        @if(Session::has('error'))
                            <div class="alert alert-danger">{{ Session::get('error') }}</div>
                        @endif
                    </div>

      <div class="form-signin">
    <div class="text-center">
      {{--   <img src="assets/img/logo.png" alt="Metis Logo"> --}}
      <h1>Veuillez vous connecter</h1>
    </div>
    <hr>
    <div class="tab-content">
        <div id="login" class="tab-pane active">
            <form action="{{ route('signin') }}" method="post">
                <p class="text-muted text-center" style="color: black;">
                    Entrer votre Login et Mot de passe
                </p>
                <input type="text" placeholder="Email" name="email" class="form-control " required>
                <input type="password" placeholder="Mot de passe" name="password" class="form-control" required>
                <div class="checkbox">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" >
		  
		</div>
                <button class="btn btn-lg btn-primary btn-block" style="background-color: #34495e; border-color: #34495e;" type="submit">Connexion</button>
            </form>
        </div>
        {{-- <div id="forgot" class="tab-pane">
            <form action="{{ route('recover') }}" method="post">
                <p class="text-muted text-center">Enter your valid e-mail</p>
                <input type="email" placeholder="mail@domain.com" class="form-control" required>
                <br>
                <button class="btn btn-lg btn-danger btn-block" type="submit">Recover Password</button>
                <input type="hidden" name="_token" value="{{ csrf_token() }}" >
            </form>
        </div> --}}
        <div id="signup" class="tab-pane">
            <form action="{{ route('register') }}" method="post">
            <p class="text-muted text-center">Entrer vos Identifiants</p>
               <input type="text" placeholder="votre nom" class="form-control " name="name" required>
                <input type="email" name="email" placeholder="votre email" class="form-control " required>
                <input type="password" name="password" placeholder="votre Mot de Passe" class="form-control " required>
                
                <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                <button class="btn btn-lg btn-success btn-block" type="submit">S'inscrire</button>
            </form>
        </div>
    </div>
    <hr>
    <div class="text-center">
        <ul class="list-inline">
            <li><a class="text-muted" href="{{ route('home') }}" >Retour au Site</a></li>
           <li><a class="text-muted" href="#forgot" data-toggle="tab">Forgot Password</a></li>
            <li><a class="text-muted" href="#signup" data-toggle="tab">Signup</a></li>
        </ul>
    </div>
  </div>
<p align="center"><h4 style="color: grey/*rgba(255, 114, 0, 0.75)*/ ;text-align: center">Powered by WeMadeItin</h4></p>

@endsection
