@extends('layouts.app')
@section('title', 'bayi')

@section('content')
    <div class="container-fluid">
        <div class="d-flex justify-content-between">
            <h4> Data Bayi </h4>
            
            <div class="row">
                <div class="col-md-100">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Pilih Wilayah</option>
                        @foreach ($wilayah as $wilayah)
                            <option value=" {{$wilayah->id}} " id="nama_wilayah" class="form- control">{{$wilayah->nama_wilayah}}</option>
                        @endforeach
                    </select>
                    {{-- <label for="nama_wilayah">Wilayah</label>
                    <select name="nama_wilayah" id="nama_wilayah" class="form-control">
                        <option value="">Pilih Wilayah</option>
                        @foreach ($wilayah as $wilayah)
                            <option value="{{$wilayah->id}}">{{$wilayah->nama_wilayah}}</option>
                        @endforeach
                    </select> --}}
                </div>
            </div>
            
            <div>
                <a href="/bayis/create" class="btn btn-primary">Tambah Data</a>
            </div>
        </div>  
        <hr> 
            <div class="row text-center" >
                <div class="col-md-100" style="font-size: 10px">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Bayi</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Tanggal Lahir</th>
                                <th scope="col">Nama Orang Tua</th>
                                <th scope="col">Alamat</th>    
                                <th scope="col">Wilayah</th>
                                {{-- <th scope="col" colspan="15">Pemberian Imunisasi</th> --}}
                                {{-- <th scope="col">Keterangan</th>  --}}
                                <th scope="col">Action</th>                               
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bayis as $bayi)
                                 
                                <tr>
                                    <td>{{ $bayis->count() * ($bayis->currentPage() - 1) + $loop->iteration}}</td>
                                    <td>{{$bayi->nama_bayi}}</td>
                                    <td>{{$bayi->jenis_kelamin}}</td>
                                    <td>{{$bayi->tanggal_lahir}}</td>
                                    <td>{{$bayi->nama_orangtua}}</td>
                                    <td>{{$bayi->alamat}}</td>
                                    <td>{{$bayi->wilayah->nama_wilayah}}
                                  

                                    <td>
                                        {{-- </div> --}}
                                        {{-- <form action="/bayis/{{ $bayi->slug }}/delete" method="get">
                                            @csrf --}}
                                            {{-- @method("delete") --}}
                                            <a href="/bayis/{{ $bayi->slug }}/edit" class="btn btn-sm btn-primary">Edit</a>
                                            <a href="/bayis/{{ $bayi->slug }}/delete" onclick="return confirm('yaaa..?')" class="btn  btn-danger  btn-sm">
                                                Delete
                                            </a>
                                        {{-- <form> --}}
                                        
                                    </td>
                                </tr>
                            @endforeach    
                        </tbody>                
                        
                    </table>

            </div>    
        </div>    
        <div class="d-flex justify-content-center">
            <div>
            {{ $bayis->links() }}
            </div> 
        </div>   
    </div> 
    <script>
        $('delete').click(function(){
            return confirm('Are you sure want to continue?');
        });
    </script>
@stop


