@extends('layouts.app', ['title' => 'Edit Bayi'])

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                
                <div class="card">
                    <div class="card-header">Edit Bayi: {{$bayi->nama_bayi}}</div>
                    <div class="card-body">
                        <form action="/bayis/{{ $bayi->slug }}/edit" method="post">
                            @method('patch')
                            @csrf
                            @include('bayis.kembar.form-control')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@stop