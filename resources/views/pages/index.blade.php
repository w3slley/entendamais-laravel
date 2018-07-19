@extends('layout')
@section('title')
    <title>Entenda Mais | Venha entender mais sobre o mundo em que vivemos!</title>
@endsection

@section('css')
    <link rel="stylesheet" href="css/index.css">
@endsection

@section('body')

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
    <section>
        
    <p id="text1">Aprenda matemática, física e astronomia com imagens intuitivas.</p>

    <img id="img1" class="img-fluid" src="images/if%20i_ve%20seen%20further.jpg">

    </section>

    <section>

    <img id="img1" class="img-fluid" src="images/Wg7MVu.jpg">

    <p id="text2">Inspire-se com citações que fazem você pensar mais sobre a realidade!</p>

    </section>

  
<script src="js/main.js"></script>    
</div>

@endsection