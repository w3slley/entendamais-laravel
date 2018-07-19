@extends('layout')

@section('title')
<title>About project</title>
@endsection

@section('css')
    <link rel="stylesheet" href="css/main.css">
@endsection

@section('body')
    
    <div id = "carousel" class="container">
    
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="images/inGS2J.jpg" alt="Los Angeles" style="width:100%; height:600px;">
                </div>

                <div class="item">
                    <img src="images/black%20hole.jpg" alt="Chicago" style="width:100%; height:600px;">
                </div>
                
                <div class="item">
                    <img src="images/light-year.jpg" alt="Chicago" style="width:100%; height:600px;">
                </div>
            
                <div class="item">
                    <img src="images/enceladus.jpg" alt="New york" style="width:100%; height:600px;">
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
    </div>
 
    <article>   
        <strong style="font-size: 30px">Sobre o projeto:</strong> <br>
        
        <section>
        <p>
            O projeto Entenda Mais foi criado com o intuito de tornar público um dos bens mais preciosos de nossa espécie: o conhecimento. Portanto, através da plataforma será possível obter conhecimento sobre diversos tópicos sobre o mundo natural, desde matemática e física até biologia e astronomia, tendo como intuito, sempre, apresentar as características físicas do mundo em que vivemos.
            </p>

        </section>

        <hr>
    </article>
@endsection