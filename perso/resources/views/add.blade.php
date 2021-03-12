@extends('layout.base')
@section('css')  
    <link rel="stylesheet" href="{{ asset('/css/add.css')}}">   
@endsection
@section('title', 'Ajouter un Livre')
@section('content')
    <h1 class="title">Ajouts</h1>
    <div class="list">
        <table>
            <thead id="head">
                <tr class="tab-haed">
                    <th scope="col">Ajouter un Personnage</th>
                    <th scope="col">Ajouter un Créateur</th>
                </tr>
            </thead>
            <tbody>
                    <tr id="body">
                        <td><a id="link" href="/addPerso">Ajouter un Personnage</td>
                        <td><a id="link" href="/addDesigner">Ajouter un Créateur</td>
                    </tr>
            </tbody>
        </table>
    </div>
@endsection
