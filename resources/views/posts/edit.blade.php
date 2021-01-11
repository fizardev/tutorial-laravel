@extends('layouts.app')

@section('title', 'Add Post')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Post</h4>
                    </div>
                    <div class="card-body">
                        <form action="/posts/{{ $post->slug }}/edit" method="POST">
                            @method('patch')
                            @csrf
                            @include('posts.partials.form-control')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
