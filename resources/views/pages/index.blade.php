@extends('layout')
@section('title')
    <title>Entenda Mais | Venha entender mais sobre o mundo em que vivemos!</title>
@endsection

@section('css')
    <link rel="stylesheet" href="css/index.css">
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
    <div class="main-text">
        <h1>Venha entender mais sobre o mundo em que vivemos!</h1>
    </div>

    <div class="main-img">
        <img src="images/img.png">
    </div>   
    
     <video autoplay loop id="video-background" muted plays-inline> 
          <source src="videos/video.mp4" type="video/mp4">
      </video>

<div class="body">
    <div class="text-container-first">
        <p>Aprenda matemática, física e astronomia com imagens intuitivas.</p>
     </div>
    <div class="img-container-first">
        <img src="images/pi.jpg">

    </div>
   
   <div class="container-div">
    <div class="text-container-second">
            <p>Inspire-se com artigos que fazem você pensar mais sobre a realidade!</p>
        </div>
        <div class="img-container-second">
            <img src="images/age.jpg">

        </div>
   </div>
   <div class="container-div">
        <div class="video">
            <h1>Aprenda com os vídeos do projeto!</h1>
            <video controls>
            <source src="videos/curiosidade_humana.mp4" type="video/mp4">
            </video>
        </div>
    </div>

    {{-- <div class="text-container">
    <div class="img-container">
    <img id="img1" class="img-fluid" src="images/Wg7MVu.jpg">

    <p id="text2">Inspire-se com citações que fazem você pensar mais sobre a realidade!</p>

    </section> --}}

    
</div>
  
<script src="js/main.js"></script>
@endsection