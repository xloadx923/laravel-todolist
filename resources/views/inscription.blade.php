<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="favicon.png">
        <title>{{ $title }}</title>
        @vite('resources/css/font-awesome.min.css')
        @vite('resources/css/global.css')
        @vite('resources/css/style.css')
        @vite('resources/css/media.css')
        <link rel="icon" type="image/png" href="favicon.png">
</head>
<body class="site">
    <div class="message"></div>
    <header class="header">
        <img src="{{{ asset('img/logo.png') }}}" class="logo" alt="Gestion des tâches">
        <h1 class="site_title">{{ $title }}</h1>
        </header>
        <nav class="navbar">
            <ul class="ul-navbar">
                <li class="li-navbar">

                    @foreach($nav as $index=>$menu)
                        <li class="li-navbar"><a class="lnk-navbar" href="{{ $index }}">{{ $menu }}</a></li>
                    @endforeach

                </li>
            </ul>
            <button id="mobile-button" class="nav-burger"><i id="mobile-icon" class="fa fa-bars" aria-hidden="true"></i></button>
        </nav>
        <main class="main">

        <div class="title">{{ $maintitle }}</div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
       
        <div class='pageInscription'>
            <form method='post' action='/inscription' id='formInscription' name='formInscription' enctype='multipart/form-data'>
            @csrf

            <input type='text' id='name' name='name' placeholder='Name'>
                @if($errors->has('name'))
                    <p class='help is-danger'>{{ $errors->has('name') }}</p>
                @endif
                <input type='text' id='email' name='email' placeholder='Email'>
                @if($errors->has('email'))
                    <p class='help is-danger'>{{ $errors->has('email') }}</p>
                @endif
                <input type='password' id='password' name='password' placeholder='Mot de passe'>
                @if($errors->has('password'))
                    <p class='help is-danger'>{{ $errors->has('password') }}</p>
                @endif
                <input type='button' value='Inscription' id='btnInscription' name='btnInscription'>
                <input type='hidden'  id='remember_token' name='remember_token' value=''>
                <input type='submit' value='Se connecter' id='btnConnexion' name='btnConnexion'>
            </form>

        </div>
        </main>
        <footer class="footer">&copy; 2022 - Yann / Wildo</footer>
        @vite("resources/js/functions.js")
        @vite("resources/js/script.js")
        </body>
        </html>

</body>
