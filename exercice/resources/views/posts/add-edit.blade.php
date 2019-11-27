@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Company</div>
                <div class="card-body">
                    @if(Session::has('error'))
                        <div class="alert alert-danger">
                            {{Session::get('error')}}
                        </div>
                    @elseif(Session::has('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                    @endif
                    <form action="" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="post-title">Post title</label>
                            <input type="text" name="title" class="form-control" id="post-title" @if(isset($post->title)) value="{{$post->title}}" @endif>
                            <label for="post-description">Post description</label>
                            <textarea name="description" class="form-control" id="post-description">@if(isset($post->description)){{$post->description}}@endif</textarea>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
