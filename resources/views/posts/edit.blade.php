@extends('layout')

@section('title')
    <title>Edit post</title>
@endsection

@section('css')
    <link rel='stylesheet' href="/css/main.css">
@endsection

@section('body')
    <div class="body-edit">
        <h1>Edit</h1>
        {{ Form::open(['action' => ['PostsController@update', $post->post_slug], 'method' => 'POST', 'enctype' => 'multipart/form-data']) }}
            {{ Form::text('title', $post->title, ['placeholder' => 'Title']) }}<br><br>
            {{ Form::textarea('post_content', $post->post_content) }}<br><br>
            {{Form::hidden('_method', 'PUT')}} <!-- You have to insert this when you are updating a value from the database-->
            {{ Form::file('cover_image') }}<br><br>
        {{Form::submit('Save changes', ['class' => 'btn btn-primary'])}}
        {{ Form::close() }}

        {{-- <form action="/post/create" method="POST">
            <textarea cols="40" rows="10"></textarea><br>
            <button>Create Post</button>edit
        </form> --}}
    </div>

    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'post_content' );
    </script>
@endsection

