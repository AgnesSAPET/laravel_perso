@extends('layout.base')
@section('css')  
    <link rel="stylesheet" href="{{ asset('/css/addPerso.css')}}">   
@endsection
@section('title', 'Ajouter un Livre')
@section('content')
    <h1 class="title">Ajouter un Personnage</h1>
    <div class="cadre">
        <form action="/addPerso" method="POST">
            @csrf
            <fieldset class="test">
                <legend>Rentrez votre Personnage</legend>
                <div class="form">
        
                    <label for="name">Nom : </label>
                    <input type="text" name="name" id="name"><br>
        
                    <label for="cartoon">Bande Dessiné : </label>
                    <input type="text" name="cartoon" id="cartoon"><br>
                    
                    <label for="creation_year">Année de publication : </label>
                    <input type="number" min=1900 max=2021 name="creation_year" id="creation_year"><br>
        
                    <label for="designer">Dessinateur : </label>
                    <select name="designer_id" id="">
                        @foreach ($designers as $designer)
                        <option value="{{ $designer->id }}">{{ $designer->name }}</option>
                        @endforeach
                    </select><br>
        
                    <input id="button" type="submit" value="Ajouter !"><br>

                </div>
            </fieldset>
        </form>
    </div>
@endsection
