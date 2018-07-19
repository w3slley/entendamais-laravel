@extends('layout')

@section('title')
    <title>Create new post</title>
@endsection

@section('css')
    <link rel='stylesheet' href="/css/main.css">
@endsection

@section('body')

    <h1>Create new post</h1>
    {{ Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) }}
        {{ Form::text('title', '', ['placeholder' => 'Title']) }}<br>
        {{ Form::textarea('post_content', '', ['placeholder'=>'Create a new post']) }}<br>
        {{ Form::file('cover_image') }}<br>
        {{ Form::submit('Submit') }}
    {{ Form::close() }}

    {{-- <form action="/post/create" method="POST">
        <textarea cols="40" rows="10"></textarea><br>
        <button>Create Post</button>
    </form> --}}

    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'post_content' );
    </script>
@endsection

