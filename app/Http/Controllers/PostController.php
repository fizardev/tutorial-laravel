<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Post;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show(Post $post) {
        return view('posts.show', compact('post'));
    }

    public function index() {

        $posts = Post::latest()->paginate(6);
        return view('posts.posts', compact('posts'));
    }

    public function create() {
        return view('posts.create', ['post' => new Post()]);
    }

    public function store(PostRequest $request) {

        $attr = $request->all();

        $attr['slug'] = \Str::slug(request()->title);

        Post::create($attr);

        session()->flash('success', 'The post was created');

        return redirect('/posts');
    }

    public function edit(Post $post) {
        return view('posts.edit', compact('post'));
    }

    public function update(PostRequest $request, Post $post) {

        $attr = $request->all();

        $post->update($attr);

        session()->flash('success', 'The post was updated');

        return redirect('/posts');
    }

    public function destroy(Post $post) {
        $post->delete();

        session()->flash('success', 'The post was deleted');

        return redirect('/posts');
    }
}
