@extends('layouts.main')
@section('content')
    <div>
        <div>
            <a class="btn btn-primary mb-2" href="{{route('post.create')}}">Add Post</a>
        </div>
        @foreach($posts as $post)
        <div ><a class="btn btn-dark mb-2" href="{{route('post.show', $post->id)}}">{{$post->id}}.{{$post->title}} </a></div>
        @endforeach
    </div>
@endsection
