@extends('layouts.app')

@section('title', 'Add Post')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add New Post</h4>
                    </div>
                    <div class="card-body">
                        <form action="/posts/store" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title" class="form-control @error('title')is-invalid @enderror">
                                @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="Content">Content</label>
                                <textarea name="body" id="body" class="form-control @error('title')is-invalid @enderror"></textarea>
                                @error('body')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <button type="submit" name="add-post" class="btn btn-primary">Add Post</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
