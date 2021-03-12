@extends('layout.base')
@section('css')  
    <link rel="stylesheet" href="{{ asset('/css/list.css')}}">   
@endsection
@section('title', 'Liste de Personnages')
@section('content')
    <h1 class="title">Liste des Personnages</h1>
    <div class="list">
        <table>
            <thead id="head">
                <tr class="tab-haed">
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Bande Déssiné</th>
                    <th scope="col">Date de création</th>
                    <th scope="col">Déssinateur</th>
                    <th scope="col">Modif</th>
                    <th scope="col">Suppr</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($characters as $character)
                    <tr id="body">
                        <th scope="row">{{$character->id}}</th>
                        <td><a id="link" href="/character/{{$character->id}}">{{$character->name}}</td>
                        <td>{{$character->cartoon}}</td>
                        <td class="date">{{$character->creation_year}}</td>
                        <td><a id="link" href="/designer/{{$character->designer_id}}">{{$character->designer->name}}</td>
                        <td>
                            <form action="/updateCharacter/{{$character->id}}" method="GET">
                                @csrf
                                <input class="modif" type="hidden" name="id" value="{{$character->id}}">
                                <input class="modif" type="submit" name="button-update" id="button-update" value="↻">
                            </form>
                        </td>
                        <td>
                            <form action="/deleteCharacter" method="POST">
                                @csrf
                                <input class="supp" type="hidden" name="id" value="{{$character->id}}">
                                <input class="supp" type="submit" name="button-delete" id="button-delete" value="🗑">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
