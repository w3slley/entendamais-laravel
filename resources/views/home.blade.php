@extends('layout')

@section('title')
    <title>Register</title>
@endsection

@section('css')
    <link rel="stylesheet" href="/css/main.css">
@endsection
<br><br>
@section('body')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h2>Posts:</h2>
                    @foreach($posts as $post)
                        <div class="card">
                            
                            <p>{{$post->title}}</p>
                            <a href="/posts/{{$post->post_slug}}/edit" class="btn btn-outline-info float-right">Edit</a>
                            {!!Form::open(['action' => ['PostsController@destroy', $post->post_slug], 'method' => 'POST'])!!}   
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                            {!! Form::close() !!}
                           
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
