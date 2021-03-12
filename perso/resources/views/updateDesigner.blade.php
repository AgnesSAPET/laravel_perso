@extends('layout.base')
@section('css')  
    <link rel="stylesheet" href="{{ asset('/css/update.css')}}">   
@endsection
@section('title', 'Modifier des Personnage')
@section('content')
    <h1 class="title">Modifier le Personnage</h1>
    <div class="cadre">
        <form action="/updateDesigner" method="POST">
            @csrf
            <fieldset class="test">
                <legend>Modifier Votre Personnage</legend>
                <div class="form">
        
                    <label for="name">Nom : </label>
                    <input type="text" name="name" id="name" value="{{$designer->name}}"><br>
        
                    <label for="year_born">Année de Naissance : </label>
                    <input type="number" min=1900 max=2021 name="year_born" id="year_born" value="{{$designer->year_born}}"><br>
        
                    <label for="nationality">Nacionalité : </label>
                    <input type="text" name="nationality" id="nationality" value="{{$designer->nationality}}"><br>
        
                    <input id="button" type="submit" value="Modifier !"><br>

                </div>
            </fieldset>
        </form>
    </div>
@endsection
