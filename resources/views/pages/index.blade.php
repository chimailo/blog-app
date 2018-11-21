@extends('layouts.app')

@section('content')
    <main role="main" class="container">
        <div class="jumbotron">
        <h1>Welcome to {{$title}}</h1>
            <p class="lead">This is the home page of our blog</p>
            <a class="btn btn-lg btn-primary" href="/" role="button">Read &raquo;</a>
        </div>
    </main>

 @endsection
