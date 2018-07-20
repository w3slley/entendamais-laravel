@extends('layout')
@section('title')
    <title>Artigos</title>
@endsection

@section('css')
    <link rel="stylesheet" href="css/main.css">
@endsection

@section('body')
<div class="body">
 
    <hr>
    <h2><b>Artigos:</b></h2>
    @if(count($posts)> 0)
        @foreach($posts as $post)
        <div class="post">
            <div class="post-img">
                @if($post->cover_image == '')

                @else
                    <img class="post-img-index" src="/storage/cover_images/{{$post->cover_image}}"">
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
<script src="/js/post.js"></script>   
@endsection