@extends('layout.base')
@section('css')  
    <link rel="stylesheet" href="{{ asset('/css/designers.css')}}">   
@endsection
@section('title', 'Liste de Personnages')
@section('content')
    <h1 class="title">Liste des Dessinateur</h1>
    <div class="list">
        <table>
            <thead id="head">
                <tr class="tab-haed">
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Année de Naissance</th>
                    <th scope="col">Nationalité</th>
                    <th scope="col">Modiff</th>
                    <th scope="col">Suppr</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($designers as $designer)
                    <tr id="body">
                        <th scope="row">{{$designer->id}}</th>
                        <td><a id="link" href="/designer/{{$designer->id}}">{{$designer->name}}</td>
                        <td class="date">{{$designer->year_born}}</td>
                        <td>{{$designer->nationality}}</td>
                        <td>
                            <form action="/updateDesigner/{{$designer->id}}" method="GET">
                                @csrf
                                <input class="modif" type="submit" name="button-update" id="button-update" value="↻">
                            </form>
                            <td>
                                <form action="/deleteDesigner" method="POST">
                                    @csrf
                                    <input class="supp" type="hidden" name="id" value="{{$designer->id}}">
                                    <input class="supp" type="submit" name="button-delete" id="button-delete" value="🗑">
                                </form>
                            </td>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
