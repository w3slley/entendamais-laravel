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
            @php /*This is how you insert php code in blade templating engine*/
            $title = str_replace(' ', '-', $post->title);
            $post_title = strtolower($title); //This takes the post title and uses as the url of the post itself
            @endphp
            <div class="post-text">
                <h2><a href="/posts/{{$post_title}}">{{$post->title}}</a></h2>
                <p>{{$post->created_at->diffForHumans()}}</p>
            </div>

        </div>
        @endforeach
    @else
        <p>No posts yet</p>
    @endif
    
    
</div>     
@endsection