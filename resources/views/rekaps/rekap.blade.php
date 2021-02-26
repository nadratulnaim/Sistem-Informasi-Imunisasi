@extends('layouts.app')
@section('title', 'rekap')

@section('content')
    <div class="container-fluid">
        <div class="d-flex justify-content-between">
            <h4> Data Rekap Seluruh Bayi </h4>
            <div>
                <a href="/rekaps/create" class="btn btn-primary">Tambah Data</a>
            </div>
        </div>  
        <hr> 
            <div class="row text-center" >
                <div class="col-md-100" style="font-size: 8.5px">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" rowspan="2">No</th>
                                <th scope="col" rowspan="2">Nama Bayi</th>
                                <th scope="col" rowspan="2">Jenis Kelamin</th>
                                <th scope="col" rowspan="2">Tanggal Lahir</th>
                                <th scope="col" rowspan="2">Nama Orang Tua</th>
                                <th scope="col" colspan="14">Pemberian Imunisasi</th>
                                <th scope="col" colspan="2">Boster</th>
                                <th scope="col" rowspan="2">Keterangan</th>
                                <th scope="col" rowspan="2">Action</th>
                            </tr>
                            <tr>
                                
                                    
                                    @foreach ($imunisasis as $imunisasi)  
                                    <th>{{$imunisasi->nama_imunisasi}}</th>            
                                    @endforeach
                                {{-- <th>aaa</th>  --}}
                                
                                   {{-- <th>HBO1</th>
                                 <th>POL1</th>
                                    <th>BCG</th>
                                    <th>HIB1</th>
                                    <th>POL2</th>
                                    <th>PCV1</th>
                                    <th>HIB2</th>
                                    <th>POL3</th>
                                    <th>PCV2</th>
                                    <th>HIB3</th>
                                    <th>POL4</th>
                                    <th>IPV</th>
                                    <th>MR</th>
                                    <th>PCV3</th>
                                    <th>HIB</th>
                                    <th>MRB</th> --}}
                                    
                            </tr>
                        </thead>
                        <tbody>
                           
                            @foreach ($bayis as $rekap)
                                <tr>
                                    <td>{{ $bayis->count() * ($bayis->currentPage() - 1) + $loop->iteration}}</td>
                                    <td>{{$rekap->nama_bayi}}</td>
                                    <td>{{$rekap->jenis_kelamin}}</td>
                                    <td>{{$rekap->tanggal_lahir}}</td>
                                    <td>{{$rekap->nama_orangtua}}</td>
                                
                                    {{-- @foreach ($bayi->imunisasis as $imunisasi)  --}}
                                    {{-- <td>{{ $imunisasi->id ?? Ya}}</td> --}}
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                   
                                    {{-- <div class="card-footer d-flex justify-content-between"> --}}
                                    <td><a href="/rekaps/{{ $rekap->slug }}/edit" class="btn btn-sm btn-primary">Edit</a>
                                    {{-- </div> --}}
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
                                                    <div>{{ $rekap->nama_bayi }} </div>
                                                    <div class="text-secondary">
                                                        <small>Published: {{ $rekap->created_at->format("d F, Y") }}</small>
                                                    </div>
                                                </div>
                                                <form action="/rekaps/{{ $rekap->slug }}/delete" method="post">
                                                    @csrf
                                                    @method("delete")
                                                    <div class ="d-flex">
                                                        <button class="btn btn-danger mr-2" type="submit">Yakin</button>
                                                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Tidak</button>
                                                    </div>
                                                <form>
                                </tr>
                                
                                {{-- @empty --}}
                                @endforeach
                                {{-- @endforeach --}}
                            
                        </tbody>                
                        
                    </table>

            </div>    
        </div>    
        <div>
            {{ $bayis->links()}}
        </div>
    </div> 
    
@stop


