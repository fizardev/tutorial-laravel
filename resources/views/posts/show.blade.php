@extends('layouts.app')

@section('title', 'Show Post')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-12">
                <div class="header">
                    <h1>{{ $post->title }}</h1>
                    <div class="text-secondary">
                        <small>{{ $post->category->name }} &middot; {{ $post->created_at->format('d F, Y') }}</small>
                    </div>
                    <hr>
                </div>
                <div class="content">
                    <p>{{ $post->body }}</p>
                </div>
                <div class="del">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-link text-danger btn-sm p-0" data-toggle="modal" data-target="#exampleModal">
                    Delete
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Yakin ingin menghapusnya?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            {{ $post->title }}
                            <div class="date text-secondary">
                                <small>
                                    {{ $post->created_at->format("d F, Y")}}
                                </small>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" data-dismiss="modal">Tidak</button>
                            <form action="/posts/{{ $post->slug }}/delete" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Ya</button>
                            </form>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
