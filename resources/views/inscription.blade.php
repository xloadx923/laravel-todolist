@extends('layout')

    @section('content')
        <div class='pageInscription'>
            <form method='post' action='/inscription' id='formInscription' name='formInscription' enctype='multipart/form-data'>
            @csrf

                <input type='text' id='name' name='name' placeholder='Name' value='{{ old("name") }}'>
                @if($errors->has('name'))
                    <p class='help is-danger'>{{ $errors->first('name') }}</p>
                @endif
                <input type='email' id='email' name='email' placeholder='Email' value='{{ old("email") }}'>
                @if($errors->has('email'))
                <p class='help is-danger'>{{ $errors->first('email') }}</p>
                @endif
                <input type='password' id='password' name='password' placeholder='Mot de passe'>
                @if($errors->has('password'))
                <p class='help is-danger'>{{ $errors->first('password') }}</p>
                @endif              
                <input type='password' id='password_confirmation' name='password_confirmation' placeholder='Confirmation mot de passe'>
                @if($errors->has('password_confirmation'))
                    <p class='help is-danger'>{{ $errors->first('password_confirmation') }}</p>
                @endif
                <input type='submit' value="M'inscrire" id='btnInscription' name='btnInscription'>
            </form>
        </div>
    @endsection