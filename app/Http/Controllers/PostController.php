<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show(Post $post) {
        // $post = Post::where('slug', $posts)->firstOrFail();
        // dd($post);
        return view('posts', compact('post'));
    }
}
