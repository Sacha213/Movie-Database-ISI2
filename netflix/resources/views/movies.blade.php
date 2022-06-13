@extends('layouts.homeLayout')

@section('css')
<link rel="stylesheet" href="../resources/css/style.css">
@endsection

@section('contenu')
<h2> Voici tous nos films actuellement disponibles :</h2>
<div class="gridContainer">
    <div class="grid">
        @foreach($movies as $movie)
        <a class="imgLink" href="{{ route('home.show', $movie->id) }}"> <img class="grow" src=" {{ $movie->img }} "/> </a>
        @endforeach
    </div>
</div>
@endsection