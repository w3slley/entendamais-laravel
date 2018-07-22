@extends('layout')

@section('title')
    <title>Sobre o autor</title>
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
  
    <div class="body">
        <hr>
   
        <div class="description-about-me">
            <h1>Sobre o autor:</h1>
                <img class="my-photo" src="images/profile.jpg" width="250px">
        
                <p>
            Weslley estuda física na Universidade de Porto tendo como objetivo central aprender mais sobre o mundo natural em que vivemos. Como consequência, tenta aprender sobre as diversas tecnologias desenvolvidas e utilizadas para melhorar a nossa sociedade. Leitor ávido, (se diz) jogador de xadrez, programador web, apreciador da literatura clássica, gosta de conhecer gente nova e acredita que é possível tentar fazer sentido da complexidade que chamamos de vida aprendendo algo novo todo dia. 
                </p>
                <h3>Entre em contato: <span style="text-decoration:underline">wvictor07@gmail.com</span></h3>
                <div class="social-contact">
                    <a target="_blank" href="https://github.com/wvict"><img src="images/github.png"></a>
                    <a target="_blank" href="https://linkedin.com/in/wvict"><img src="images/linkedin.png"></a>
                    <a target="_blank" href="https://www.youtube.com/channel/UChKfMu5nqzFLgLHa-R0a12A"><img src="images/youtube.png"></a>

                </div>

                <hr>
        </div>
    </div>
    <script src="/js/post.js"></script>
@endsection