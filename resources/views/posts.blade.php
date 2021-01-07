@extends('layouts.app')

@section('title','About')

@section('content')
    <div class="container py-4">
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->body }}</p>
    </div>
@endsection
