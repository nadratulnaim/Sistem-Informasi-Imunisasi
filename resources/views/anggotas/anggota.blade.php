@extends('layouts.app')
@section('title', 'anggota')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-100">
                <h4> Data Anggota </h4>
            
                <table class="table table-primary table-hover table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Email</th>
                                <th scope="col">Nomor Handphone</th>
                            </tr>
                        </thead>
                
                        <tbody>
                            <tr>
                                {{-- @foreach ($anggota as $anggotaa) --}}
                                {{-- <td > {{$anggotaa->id_anggota}} </td> --}}
                                <td>1</td>
                                <td>nama</td>
                                <td>alamat</td>
                                <td>email</td>
                                <td>no hp</td>
                                {{-- @endforeach --}}
                            </tr>
                        </tbody>
                </table>                
            </div>    
        </div>    
    </div> 
    
@stop


