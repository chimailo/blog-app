@extends('layouts.app')

@section('content')
    <h1>{{$post->title}}</h1>
<small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
    
    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => ''])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
    <hr>
    <p class="lead">{!!$post->body!!}</p>
    <a class="btn btn-primary" href="/posts">&laquo Back</a>

@endsection