@extends('layouts.app')

@section('title', $post->judul_post)

@section('content')   
    <div class="container">
        <h2><p>{{ $post->judul_post }}</p></h2>
        <p>{{ $post->isi_post }}</p>
        <div>
            <!-- Button trigger modal -->
<button type="button" class="btn btn-link text-danger btn-sm p-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Delete
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Lanjutkan untuk menghapus..?</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class ="mb-2">
                <div>{{ $post->judul_post }} </div>
                <div class="text-secondary">
                    <small>Published: {{ $post->created_at->format("d F, Y") }}</small>
                </div>
            </div>
            <form action="/posts/{{ $post->slug }}/delete" method="post">
                @csrf
                @method("delete")
                <div class ="d-flex">
                    <button class="btn btn-danger mr-2" type="submit">Yakin</button>
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Tidak</button>
                </div>
            <form>
        </div>
      </div>
    </div>
  </div>
           
        </div>
    </div>    
@endsection