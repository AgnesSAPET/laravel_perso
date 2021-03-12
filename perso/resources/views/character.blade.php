@extends('layout.base')
@section('css')  
    <link rel="stylesheet" href="{{ asset('/css/character.css')}}">   
@endsection
@section('title', 'Personnages')
@section('content')
    <h1 class="title">Détails des Personnages</h1>
    <div id="card">
        <div class="card border-dark mb-3" style="max-width: 18rem;">
            <div class="card-header">{{$character->name}}</div>
            <div class="card-body text-dark flex">
                <p>Apparaît dans : </p>
                <p class="card-text">{{$character->cartoon}}</p>
            </div>
            <div class="card-body text-dark flex">
                <p>Année de publication : </p>
                <p class="card-text">{{$character->creation_year}}</p>
            </div>
            <div class="card-body text-dark flex">
                <p>Créateur : </p>
                <p class="card-text">{{$character->designer->name}}</p>
            </div>
        </div>
    </div>
@endsection
