@extends('layout')
@section('title')
<title>{{$post[0]->title}} | Entenda Mais</title>
@endsection

@section('css')
    <link href="/css/main.css" rel="stylesheet">
@endsection

@section('body')
    <div class="body">    
        <hr>
        {{-- For some reason I have to insert the data into a foreach loop to be able to access it. Have to figure out why. For now, it's working: the post url is the post title. --}}
        
        
        @foreach($post as $post)
            <h2 style="text-align: center; font-size: 40px;">{{$post->title}}</h2>
            @if($post->cover_image == '')

            @else
                <img class="post-img-show" src="/storage/cover_images/{{ $post->cover_image }}" >
            @endif
            <div class="body-post">
                
                <div class="post-content">{!! $post->post_content !!}</div>
            </div>
        @endforeach
        <hr>
        <h1>Comentários ({{$count_comments}}):</h1>
        @if($count_comments != 0)

            @foreach($comments as $comment)
                <div class="display-comments">
                    <p class="author-comment">{{$comment->author}} comentou:</p>
                    <p class="content-comment">{{$comment->comment}}</p>
                    <p class="date-comment">{{$comment->created_at->diffForHumans()}}</p>
                </div>
            @endforeach

        @else
            <h2>No comments</h2>
        @endif
        <hr>
        @include('comments.display')
        
    
        
    
    </div> 
@endsection