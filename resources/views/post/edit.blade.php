@extends('layouts.main')
@section('content')
    <div class="container">

        <form action="{{route('post.update', $post->id)}}" method="post">
            @csrf
            @method('patch')
            <div class="form-group">
                <label for="title">title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="title" value="{{$post->title}}">
            </div>
            <div class="form-group">
                <label for="content">content</label>
                <textarea  class="form-control" name="content" id="content" placeholder="Content">{{$post->content}}</textarea>
            </div>
            <div class="form-group">
                <label for="image">image</label>
                <input type="text" class="form-control" name="image" id="image" placeholder="Image" value="{{$post->image}}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
