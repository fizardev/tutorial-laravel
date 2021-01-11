@extends('layouts.app')

@section('title','All Posts')

@section('content')
    <div class="container mt-4">
        <div class="d-flex">
            <div class="col-lg-12 px-0">
                {{-- @include('alert') --}}
                <div class="title d-flex justify-content-between">
                    <h1>All Posts</h1>
                    <a href="/posts/add-post" class="btn btn-primary px-3 py-0" style="line-height: 50px">Add New Post</a>
                </div>
                <hr>
            </div>
        </div>
        <div class="row">
            @forelse ($posts as $post)

            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-header">
                        {{ $post->title }}
                    </div>
                    <div class="card-body">
                        {{ Str::limit($post->body,'100') }} <br> <br>
                        <a href="/posts/{{ $post->slug }}">Read more..</a>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        Published on {{ $post->created_at->diffForHumans() }}
                        <a href="/posts/{{ $post->slug }}/edit" class="btn btn-sm btn-success">Edit</a>
                    </div>
                </div>
            </div>

            @empty
                <div class="col-lg-12">
                    <div class="alert alert-info">There's no posts.</div>
                </div>
            @endforelse

        </div>
        <div class="row justify-content-center">

            {{ $posts->links() }}
        </div>
    </div>
@endsection


