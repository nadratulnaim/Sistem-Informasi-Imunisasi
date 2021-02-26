@extends('layouts.app')
@section('title', 'Imunisasi')
@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between">
        <h4> Data Imunisasi </h4>
        <div>
            <a href="/imunisasis/create" class="btn btn-primary">Tambah Data</a>
        </div>
    </div>  
    <hr> 
        <div class="row text-center" >
            <div class="col-md-100" style="font-size: 10px">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Imunisasi</th>
                            <th scope="col">Action</th>                    
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($imunisasis as $imunisasi)
                             
                            <tr>
                                <td>{{ $imunisasis->count() * ($imunisasis->currentPage() - 1) + $loop->iteration}}</td>
                                <td>{{$imunisasi->nama_imunisasi}}</td>
                                
                            
                               
                                <td><a href="/imunisasis/{{ $imunisasi->slug }}/edit" class="btn btn-sm btn-primary">Edit</a>
                                <button type="button" class="btn  btn-danger  btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Delete
                                </button>
                                </td>
                                  
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
                                                <div>{{ $imunisasi->nama_imunisasi }} </div>
                                                <div class="text-secondary">
                                                    <small>Published: {{ $imunisasi->created_at->format("d F, Y") }}</small>
                                                </div>
                                            </div>
                                            <form action="/imunisasis/{{ $imunisasi->slug }}/delete" method="post">
                                                @csrf
                                                @method("delete")
                                                <div class ="d-flex">
                                                    <button class="btn btn-danger mr-2" type="submit">Yakin</button>
                                                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Tidak</button>
                                                </div>
                                            <form>
                            </tr>
                            {{-- @endforeach --}}
                        @empty
    
                        <div class="col-md-6">
                            <div class="alert alert-info">
                                Tidak Ada Berita
                            </div>
                        </div>
                    
                        @endforelse
                    </tbody>                
                    
                </table>

        </div>    
    </div>    
    {{-- <div class="d-flex justify-content-center">
        <div>
        {{ $imunisasis->links() }}
        </div> 
    </div>    --}}
</div> 
@endsection