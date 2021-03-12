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
                    <input type="text" name="name" id="name" value="{{$character->name}}"><br>
        
                    <label for="designer">Dessinateur : </label>
                    <select name="designer_id" id="">
                        @foreach ($designer as $designer)
                            @if ($character->designer_id === $designer->id)
                                <option value="{{$designer->id}}" selected>{{$designer->name}}</option>
                            @else
                                <option value="{{$designer->id}}">{{$designer->name}}</option>
                            @endif  
                        @endforeach
                    </select><br>
        
                    <label for="creation_year">Année de publication : </label>
                    <input type="number" min=1900 max=2021 name="creation_year" id="creation_year" value="{{$character->creation_year}}"><br>
        
                    <label for="cartoon">Bande Dessiné : </label>
                    <input type="text" name="cartoon" id="cartoon" value="{{$character->cartoon}}"><br>
        
                    <input id="button" type="submit" value="Modifier !"><br>

                </div>
            </fieldset>
        </form>
    </div>
@endsection
