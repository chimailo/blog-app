@extends('layouts.app')

@section('content')
    <h1>{{$title}}</h1>
    @if(count($email) > 0)
        <ul>
            @foreach($email as $mail)
                <li>{{$mail}}</li>
            @endforeach
        </ul>
    @endif
 @endsection
