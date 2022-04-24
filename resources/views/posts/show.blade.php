@extends('layouts.app')

@section('content')
<br>
<a href="/posts" class="btn btn-outline-secondary">Go Back</a>
<br>
<h1>{{$post->title}}</h1>
<img style="width:30%" src="{{ asset('storage/cover_images/'.explode('/',$post->cover_image)[0])}}">
<br><br>
    <div>
        {!! $post->body !!}
    </div>
    <hr>
<small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
<hr>
@if(!Auth::guest())
    @if(Auth::user()->id == $post->user_id)
        <h3><a href="/posts/{{$post->id}}/edit" class="btn btn-outline-secondary">Edit</a></h3>

        {{ Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'DELETE', 'class' => 'float-end'])}}
            {{ Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {{ Form::close() }}
    @endif
@endif

@endsection