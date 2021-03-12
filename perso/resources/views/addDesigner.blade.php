@extends('layout.base')
@section('css')  
    <link rel="stylesheet" href="{{ asset('/css/addDesigner.css')}}">   
@endsection
@section('title', 'Ajouter un Dessineur')
@section('content')
    <h1 class="title">Ajouter un Dessineur</h1>
    <div class="cadre">
        <form action="/addDesigner" method="POST">
            @csrf
            <fieldset class="test">
                <legend>Rentrez votre Créateur</legend>
                <div class="form">
        
                    <label for="name">Nom : </label>
                    <input type="text" name="name" id="name"><br>

                    <label for="year_born">Année de Naissance : </label>
                    <input type="number" min=1900 max=2021 name="year_born" id="year_born"><br>
        
                    <label for="nacionality">Nationalité: </label>
                    <input type="text" name="nacionality" id="nacionality"><br>
        
                    <input id="button" type="submit" value="Ajouter !"><br>

                </div>
            </fieldset>
        </form>
    </div>
@endsection
