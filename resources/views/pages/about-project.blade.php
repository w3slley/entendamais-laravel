@extends('layout')

@section('title')
<title>About project</title>
@endsection

@section('css')
    <link rel="stylesheet" href="css/main.css">
@endsection

@section('body')
    <div class="side-bar">
        <ul>
            <div class="close-icon">&#10005;</div>
            <li><a class="nav-link-mobile" href="/">Início</a></li> 
            <li><a class="nav-link-mobile" href="/posts">Artigos</a></li>
            <li><a class="nav-link-mobile" href="/about-me">Sobre o autor</a></li>
            <li><a class="nav-link-mobile" href="/about-project">Sobre o projeto</a></li>
        </ul>    
    </div>
    <br>
    <hr>
    <div id = "carousel">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="d-block w-100" src="images/further.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="images/light-year.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="images/enceladus.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>    
    </div>
            
    <div class="body">
        
            
            <div class="description">
             <h1>Sobre o projeto:</h1>
            <p class="text-about-project">
                O projeto Entenda Mais foi criado com o intuito de tornar público um dos bens mais preciosos de nossa espécie: o conhecimento. Portanto, através da plataforma será possível obter conhecimento sobre diversos tópicos sobre o mundo natural, desde matemática e física até biologia e astronomia, tendo como intuito, sempre, apresentar as características físicas do mundo em que vivemos.
                </p>

                 <div class="social-contact">
                    <a target="_blank" href="https://facebook.com/entendama1s"><img src="images/facebook.png"></a>
                   
                    <a target="_blank" href="https://www.youtube.com/channel/UCuNdz9OMqAl9o2QTwUwQYyQ"><img src="images/youtube.png"></a>

                </div>

            </div>

            <hr>
        
    </div>
    
      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/post.js"></script>
   
@endsection