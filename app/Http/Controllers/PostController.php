<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
       $posts = Post::all();
        return view('post.index', compact('posts'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store()
    {
        $data = request()->validate([
           'title' => 'string',
           'content' => 'string',
           'image' => 'string',
        ]);
        Post::create($data);
        return redirect()->route('post.index');
    }

    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('post.edit', compact('post'));
    }

    public function update(Post $post)
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
        ]);
        dd($data);
    }

    public function delete()
    {
        $post = Post::withTrashed()->find(1);
        $post->restore();
        dd('restored');
    }

    // firstOrCreate
    // updateOrCreate

    public function firstOrCreate()
    {
        $anotherPost = [
            'title' => 'some post',
            'content' => 'some content',
            'image' => 'some image.jpg',
            'likes' => 5000,
            'is_published' => 1,
        ];

        $post = Post::firstOrCreate([
            'title' => 'some title phpstorm',
        ],[
            'title' => 'some title phpstorm',
            'content' => 'some content',
            'image' => 'some image.jpg',
            'likes' => 5000,
            'is_published' => 1,
        ]);
        dump($post->content);
        dd('finished');
    }

    public function  updateOrCreate()
    {
        $anotherPost = [
            'title' => 'updateorcreatesome post',
            'content' => 'updateorcreatesome content',
            'image' => 'updateorcreatesome image.jpg',
            'likes' => 50,
            'is_published' => 1,
        ];

        $post = Post::updateOrCreate([
                'title' => 'some title not phpstorm',
            ],[
            'title' => 'some title not phpstorm',
            'content' => 'not updateorcreatesome content',
            'image' => 'not updateorcreatesome image.jpg',
            'likes' => 50,
            'is_published' => 1,
        ]);
        dump($post->content);
        dd('end');
    }


}
