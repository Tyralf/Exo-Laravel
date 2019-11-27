@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Posts</div>

                @if(isset($posts) && !empty($posts[0]))
                    <ul class="list-group list-group-flush">
                        @foreach($posts as $key => $post)
                            <li class="list-group-item">
                                {{$key}}. {{$post->title}}
                                <span>
                                    <a href="http://localhost/exercice/public/post/edit/{{$post->id}}" class="btn btn-secondary">Edit</a>
                                    <a href="http://localhost/exercice/public/post/delete/{{$post->id}}" class="btn btn-danger">Delete</a>
                                </span>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <div class="card-body">
                        No posts to show.
                    </div>
                @endif
                <div class="card-footer">
                    <a href="http://localhost/exercice/public/post/add" class="btn btn-primary">Add Post</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
