<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $nama = "Fizar Rama Waluyo";
        return view('home', compact('nama'));
    }

    public function show($slug) {
        return view('posts', compact('slug'));
    }
}
