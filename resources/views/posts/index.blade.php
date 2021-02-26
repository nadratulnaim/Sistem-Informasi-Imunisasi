@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between">
            <div>
                <h4>Berita Tidak Penting</h4>
                <hr>
            </div>
            <div>
                <a href="/posts/create" class="btn btn-primary">New post</a>
            </div>
        </div>

        
        <div class="row">
            {{-- <div class="col-md-6"> --}}
                @forelse ($posts as $post)
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <div class="card-header">
                                {{$post->judul_post}}
                            </div>
                            <div class="card-body">
                                
                                <div class="post">
                                    {{Str::limit($post->isi_post, 35)}}
                                </div>

                                <a href="/posts/{{$post->slug}}">Baca berita</a>
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                Published on {{ $post->created_at-> diffForHumans() }}
                                <a href="/posts/{{ $post->slug }}/edit" class="btn btn-sm btn-success">Edit</a>
                                {{-- Published on {{ $post->created_at->format("d F, Y") --}}
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-md-6">
                        <div class="alert alert-info">
                            Tidak Ada Berita
                        </div>
                    </div>
                @endforelse
            </div>

            <div class="d-flex justify-content-center">
                <div>
                {{ $posts->links() }}
                </div> 
            </div>       
    </div> 
    
@stop