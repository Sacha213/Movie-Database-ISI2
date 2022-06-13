<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    @yield('css')
    <title>Netflix</title>
</head>
<body>
    <header>
        <div class="navbar">
            <a href="{{ route('home.index') }}"><h1 class="title">Netflix</h1></a>
            <ul>
                <li><a href="{{ route('home.index') }}">Accueil</a></li>
                <li><a href="{{ route('movies.index') }}">Films</a></li>
                <li><a href="{{ route('tv.index') }}">Séries</a></li>
            </ul>
        </div>
        <div class="login">
            @auth
            <p class="welcome">Bienvenue {{ Auth::user()->name }}</p>
            <a class="loginLink" href="{{ route('logout') }}" id="deconnexion" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Déconnexion
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
            @else
            <a href="{{ route('login')}}">Se connecter</a>
            <a href="{{ route('register') }}"> Créer un compte</a>
            @endauth
        </div>
    </header>

    @yield('contenu')
    
    <footer>
        Netflix - Copyright Lilian LABROSSE & Sacha MONTEL - 2022
    </footer>
</body>
</html>