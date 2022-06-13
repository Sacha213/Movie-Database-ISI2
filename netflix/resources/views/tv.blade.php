@extends('layouts.homeLayout')

@section('css')
<link rel="stylesheet" href="../resources/css/style.css">
@endsection

@section('contenu')
<h2> Voici toutes nos séries actuellement disponibles :</h2>
<div class="gridContainer">
    <div class="grid">
        @foreach($tvs as $tv)
        <a class="imgLink" href="{{ route('home.show', $tv->id) }}"> <img class="grow" src=" {{ $tv->img }} "/> </a>
        @endforeach
    </div>
</div>
@endsection