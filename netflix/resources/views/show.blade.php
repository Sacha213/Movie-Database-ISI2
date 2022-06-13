@extends('layouts.homeLayout')

@section('css')
<link rel="stylesheet" href="../../resources/css/style.css">
@endsection

@section('contenu')
<div class="showContainer">
    @auth
    <img class="showTitle" src=" {{ $show->img }} "/>
    <div class="showInfos">
        <h3>{{ $show->title }}</h3>
        <div class="showHoriz">
            <div class="showL">
                <div class="showLT">
                    <p class="showRecommend"> Recommandé à 78%</p>
                    <p class="showYear"> {{ $show->release_year }}</p>
                    <p class="showDuration"> {{ $show->duration }} </p>
                </div>
                <div class="showLB">
                    <p class="showDescription"> {{ $show->description }} </p>
                </div>
            </div>
            <div class="showR">
                <div class="showCat">
                    <p class="showInfoTitle">Distribution : </p>
                    <p class="showNames">{{ $show->director}}</p>
                </div>
                <div class="showCat">
                    <p class="showInfoTitle">Acteurs : </p>
                    <p class="showNames">
                        @foreach($acteurs as $acteur)
                            <a href="{{ route('acteur.show', $acteur->id) }}" class="showLink">{{ $acteur->cast }},</a>
                        @endforeach
                    </p>
                </div>
                <div class="showCat">
                    <p class="showInfoTitle">Genres : </p>
                    <p class="showNames">
                        @foreach($genres as $genre)
                            <a href="{{ route('genre.show', $genre->id) }}" class="showLink">{{ $genre->genre }},</a>
                        @endforeach
                    </p>
                </div>
            </div>
        </div>
    @else
    <h2> Vous devez être connecté pour accéder au contenu des programmes. </h2>
    @endauth
    </div>
</div>
@endsection