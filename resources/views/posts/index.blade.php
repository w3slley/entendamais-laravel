@extends('layout')
@section('title')
    <title>Artigos</title>
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
    
<div class="body-post">
    <hr>
    <h2><b>Artigos:</b></h2>
    @if(count($posts)> 0)
        @foreach($posts as $post)
        <div class="post">
            <div class="post-img">
                @if($post->cover_image == '')

                @else
                    <img class="post-img-index" src="/storage/cover_images/{{$post->cover_image}}">
                @endif 
            </div>
           
            <div class="post-text">
                <h2><a href="/posts/{{str_slug($post->title)}}">{{$post->title}}</a></h2>
                {{--To create your slugs, use str_slug($string)! --}}
               
                <p>{{$post->created_at->diffForHumans()}}</p>
            </div>

        </div>
        @endforeach
    @else
        <p>No posts yet</p>
    @endif
    
    
</div>  

<script src="js/post.js"></script> 
@endsection