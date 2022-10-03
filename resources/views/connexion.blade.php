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
                <a href='/inscription' value='Inscription' id='lnkInscription' name='lnkInscription'>Inscription</a>
                <input type='submit' value='Se connecter' id='btnConnexion' name='btnConnexion'>
            </form>
        </div>
@endsection