@extends('layouts.homeLayout')

@section('css')
<link rel="stylesheet" href="../resources/css/style.css">
@endsection

@section('contenu')
    <!-- Caroussel anime-->
    <div class="category">
        <h2 class="cat_title">
            Animes :
        </h2>

        <!-- Caroussel -->
        <div class="carousel">
        @foreach($animes->shuffle() as $anime)
            <div class="show">
                <a class="imgLink" href="{{ route('home.show', $anime->id) }}"> <img class="grow" src=" {{ $anime->img }} "/> </a>
            </div>    
        @endforeach
        </div>
    </div>

    <!-- Caroussel sci-fi-->
    <div class="category">
        <h2 class="cat_title">
            Films romantiques :
        </h2>

        <!-- Caroussel -->
        <div class="carousel">
        @foreach($romantics->shuffle() as $romantic)
            <div class="show">
                <a class="imgLink" href="{{ route('home.show', $romantic->id) }}"> <img class="grow" src=" {{ $romantic->img }} "/> </a>
            </div>    
        @endforeach
        </div>
    </div>

    <!-- Caroussel horror-->
    <div class="category">
        <h2 class="cat_title">
            Horreur et thrillers :
        </h2>

        <!-- Caroussel -->
        <div class="carousel">
        @foreach($horrors->shuffle() as $horror)
            <div class="show">
                <a class="imgLink" href="{{ route('home.show', $horror->id) }}"> <img class="grow" src=" {{ $horror->img }} "/> </a>
            </div>    
        @endforeach
        </div>
    </div>
@endsection