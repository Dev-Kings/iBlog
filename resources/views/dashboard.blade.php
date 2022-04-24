@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="panel-body">
                        <a href="/posts/create" class="btn btn-primary">Create Post</a><br><br>
                        <h3>Your Blog Posts.</h3>
                        @if (count($posts) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{$post->title}}</td>
                                    <td><a href="/posts/{{$post->id}}/edit" class="btn btn-info">Edit</td>
                                    <td>
                                        {{ Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'DELETE', 'class' => 'float-end'])}}
                                        {{ Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {{ Form::close() }}
                                    </td>
                                </tr>
                                
                            @endforeach
                        </table>
                        @else
                            <p>You have no posts.</p>
                        @endif

                    </div><br>

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
