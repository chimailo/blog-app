@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-9">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/posts/create" class="btn btn-primary mb-3">Add Post</a>
                    <h3>Your Posts</h3>
                    @if(count($posts) > 0 )
                        <table class="table table-striped">
                            <tr>
                                <td>Title</td>
                                <td></td>
                                <td></td>
                            </tr>
                            @foreach($posts as $post)
                                <tr>
                                <td>{{$post->title}}</td>
                                <td><a href="/post/{{$post->id}}/edit" class="btn btn-primary">Edit</a></td>
                                <td>
                                    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => ''])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                    {!!Form::close()!!}
                                </td>
                                </tr>
                            @endforeach
                        </table>
                        @else
                            <p>You have no posts</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
