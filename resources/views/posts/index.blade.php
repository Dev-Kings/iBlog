@extends('layouts.app')

@section('content')
<h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach ($posts as $post)
            <div class="well">
                <div class="row">
                    @if ($post->cover_image == 'noimage.jpg')
                    @else
                            <div class="col-md-4 col-sm-4">
                                 <img style="width:50%" src="{{ asset('storage/cover_images/'.explode('/',$post->cover_image)[0])}}">
                            </div>  
                    @endif
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small> Written on {{$post->created_at}} by {{$post->user->name}}
                    </div>
                </div><hr>
            </div>
        @endforeach
        {{$posts->links()}}
        @else
        <p>No post found</p>
    @endif
@endsection