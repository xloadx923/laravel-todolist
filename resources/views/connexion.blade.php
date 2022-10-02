@extends('layout')

@section('content')
        <div class='pageConnexion'>
            <form method='post' action='/connexion' id='formConnexion' name='formConnexion' enctype='multipart/form-data'>
            @csrf
                <input type='text' id='email' name='email' placeholder='Email'>
                @if($errors->has('email'))
                    <p class='help is-danger'>{{ $errors->has('email') }}</p>
                @endif
                <input type='password' id='password' name='password' placeholder='Mot de passe'>
                @if($errors->has('password'))
                    <p class='help is-danger'>{{ $errors->has('password') }}</p>
                @endif
                <a href='' value='Inscription' id='btnInscription' name='btnInscription'></a>
                <input type='hidden'  id='remember_token' name='remember_token' value=''>
                <input type='submit' value='Se connecter' id='btnConnexion' name='btnConnexion'>
            </form>
        </div>
@endsection