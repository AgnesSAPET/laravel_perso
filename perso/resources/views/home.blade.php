@extends('layout.base')
@section('css')  
    <link rel="stylesheet" href="{{ asset('/css/home.css')}}"> 
@endsection
@section('title', 'BD 80')
@section('content')
    <h1 class="title">BD 80</h1>
    <h3>Venez redécouvrir les personnages de votre enfance !</h3>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="/js/carousel.js"></script>
    <script src="/js/home.js"></script>

    <div class="container"> 
        <div class="carousel" data-ride="carousel">
                  <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
                <li data-target="#myCarousel" data-slide-to="5"></li>
            </ol>
              
                  <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                  <img src="/images/80s.jpg" alt="Mix" style="width:100%;">
                </div>
              
                <div class="item">
                  <img src="/images/albator.jpg" alt="Albator" style="width:100%;">
                </div>
                  
                <div class="item">
                  <img src="/images/capitaine-flam.jpg" alt="Capitaine Flam" style="width:100%;">
                </div>

                <div class="item">
                    <img src="/images/candy.jpg" alt="Candy" style="width:100%;">
                </div>

                <div class="item">
                    <img src="/images/cosmocats.jpg" alt="Cosmocats" style="width:100%;">
                </div>

                <div class="item">
                    <img src="/images/princesse-sarah.jpg" alt="Princesse Sarah" style="width:100%;">
                </div>
            </div>
              
                  <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

@endsection