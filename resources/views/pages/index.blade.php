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
    <div class="welcome">
      <div class="main-text">
          <h1>Venha entender mais sobre o mundo em que vivemos!</h1>
      </div>

      <div class="main-img">
          <img src="images/img.png">
      </div>

    </div>

     <video autoplay loop id="video-background" muted plays-inline>
          <source src="videos/video.mp4" type="video/mp4">
      </video>

<div class="body">
    <div class="container1">
      <div data-aos="fade-right" data-aos-offset="300" class="left">
          <p>Aprenda matemática, física e astronomia com imagens intuitivas.</p>
       </div>
      <div data-aos="fade-left" data-aos-offset="300" class="right">
          <img src="images/pi.jpg">
      </div>
    </div>


    <div class="container2">
      <div data-aos="fade-down-right" data-aos-offset="300" class="left">
          <p>Inspire-se com artigos que fazem você pensar mais sobre a realidade!</p>
      </div>
      <div data-aos="fade-down-left" data-aos-offset="300" class="right">
          <img src="images/age.jpg">
      </div>
    </div>

    <div class="container3">
      <img src="images/background.jpg" alt="">
      <div class="blur"></div>
    </div>
   <div class="container4">
      <div class="video">
          <h1>Aprenda com os vídeos do projeto!</h1>
          <video controls>
          <source src="videos/curiosidade_humana.mp4" type="video/mp4">
          </video>
      </div>
  </div>

  <footer></footer>
</div>

<script src="js/main.js"></script>

@endsection
