@extends('layouts.homeLayout')

@section('css')
<link rel="stylesheet" href="../../resources/css/style.css">
@endsection

@section('contenu')
<h2> {{ $shows[0]->genre }}</h2>
    <div class="gridContainer">
        <div class="grid">
            @foreach($shows as $show)
            <a class="imgLink" href="{{ route('home.show', $show->id) }}"> <img class="grow" src=" {{ $show->img }} "/> </a>
            @endforeach
        </div>
    </div>
@endsection