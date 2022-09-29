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
        <img src="img/logo.png" class="logo">
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

            @if(isset($_REQUEST['dir']) && $_REQUEST['dir'] == 1)
                <div class='sort_list'>
                    <select id='sort-priority' name='sort-priority'>
                        <option selected readonly>Tri par priorité</option>
                        <option readonly></option><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option></select> <select id='sort-theme' name='sort-theme'>
                        <option selected readonly>Tri par thème</option>
                        <option readonly></option><option value='1'>Travail</option><option value='2'>Projet Web</option><option value='3'>Maison</option><option value='4'>Recherche de stage</option><option value='5'>Sport</option><option value='6'>Divertissement</option><option value='7'>Vacances</option><option value='8'>Apprentissage</option>
                    </select>
                </div>
            @endif

            <ul class='listTasks'>
                <li class='cellList refs'><div>Description</div><div>Priority</div><div>Date_reminder</div><div>Thème</div></li>
                @foreach($tasks as $task)
                    <form merthod='GET' action='update.php?id={{ $task->id_task }}' id='formAccueil{{ $task->id_task }}' name='formAccueil{{ $task->id_task }}' class='formAccueil'>
                        <li class='cellList' style='background-color: {{ $task->color }};'>
                            <div class='description'>
                                <input type='text' value='{{ $task->description }}' id='id-description' name='id-description' ></div>
                                <div class='priority'>
                                    <span>Priorité</span>
                                    <select id="select-priority" name="select-priority">
                                        @for($i=1;$i<=5;$i++)
                                            <option value="{{ $i }}">{{ $i }}</option>';
                                        @endfor
                                    </select>
                                </div>
                                <div class='date'>{{ $task->date_reminder }}</div>
                                @foreach($contains as $contain)
                                    @if($contain->id_task === $task->id_task)
                                        <div class='theme'><label for='theme{{ $task->id_task }}'></label><input type='checkbox' id='theme{{ $contain->id_theme }}' name='theme{{ $contain->id_theme }}' value='4' checked disabled><br></div>
                                    @endif
                                @endforeach
                            </div>
                        </li>
                    </form>
                @endforeach
            </ul>
        </main>
        <footer class="footer">&copy; 2022 - Yann / Wildo</footer>
        @vite("resources/js/functions.js")
        @vite("resources/js/script.js")
        </body>
        </html>

</body>
