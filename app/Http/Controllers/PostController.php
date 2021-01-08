<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show(Post $post) {
        return view('posts.show', compact('post'));
    }

    public function index() {

        $posts = Post::paginate(6);
        return view('posts.posts', compact('posts'));
    }

    public function create() {
        return view('posts.create');
    }

    public function store(Request $request) {

        $attr = $request->validate([
            'title' => 'required|min:3',
            'body'  => 'required|min:15',
        ]);

        $attr['slug'] = \Str::slug($request->title);

        Post::create($attr);

         return redirect('/posts');
    }
}
