@extends('layouts.app', ['title' => 'Edit Post'])

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                
                <div class="card">
                    <div class="card-header">Edit Post: {{$post->judul_post}}</div>
                    <div class="card-body">
                        <form action="/posts/{{ $post->slug }}/edit" method="post">
                            @method('patch')
                            @csrf
                            @include('posts.kembar.form-control')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@stop