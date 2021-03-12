@extends('layout.base')
@section('css')  
    <link rel="stylesheet" href="{{ asset('/css/designer.css')}}">   
@endsection
@section('title', 'Dessinateur')
@section('content')
    <h1 class="title">Dessinateur</h1>
    <div id="card">
        <div class="card border-dark mb-3" style="max-width: 18rem;">
            <input type="hidden" name="id" value="{{$designer->id}}">
            <div class="card-header">{{$designer->name}}</div>
            <div class="card-body text-dark flex">
                <p>Né en : </p>
                <p class="card-text">{{$designer->year_born}}</p>
            </div>
            <div class="card-body text-dark flex">
                <p>Nationalité : </p>
                <p class="card-text">{{$designer->nationality}}</p>
            </div>
        </div>
    </div>
@endsection
