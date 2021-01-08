@extends('layouts.app')

@section('title', 'Show Post')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-12">
                <div class="header">
                    <h1>{{ $post->title }}</h1>
                </div>
                <div class="content">
                    <p>{{ $post->body }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
