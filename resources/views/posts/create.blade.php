@extends('layouts.app', ['title' => 'New Post'])

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                
                <div class="card">
                    <div class="card-header">New Post</div>
                    <div class="card-body">
                        <form action="/posts/postadd" method="post">
                            @csrf
                            @include('posts.kembar.form-control', ['submit' => 'Create'])
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@stop