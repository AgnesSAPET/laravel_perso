@extends('layout.base')
@section('css')  
    <link rel="stylesheet" href="{{ asset('/css/home.css')}}"> 
@endsection
@section('title', 'BD 80')
@section('content')
    <h1 class="title">BD 80</h1>
    <h3>Venez redécouvrir les personnages de votre enfance !</h3>
    <label class="search">
        <!--<input type="search" id="search" name="search"
            aria-label="Search through site content" 
            placeholder="Rechercher sur le site…">
        <button id="button">Recherche</button>
    </label>-->

<img class="img" src="images/80s.jpg" alt="">
@endsection