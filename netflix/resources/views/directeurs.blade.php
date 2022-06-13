@extends('layouts.layout')

@section('titrePage')
    Liste des directeurs disponibles
@endSection

@section('titreSection')
    <h1>Tous les directeurs</h1>
@endSection

@section('contenu')
    <table>
        <thead>
            <th>Id</th>
            <th>Nom</th>
            <th>Film</th>
        </thead>
        @foreach($directeurs as $directeur)
            @foreach($directeur->shows as $show)
                <tr>
                    <td> {{ $directeur->id }} </td>
                    <td> {{ $directeur->director }} </td>
                    <td> {{ $show->title }} </td>
                </tr>
            @endforeach
        @endforeach
    </table>
@endsection