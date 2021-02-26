@extends('layouts.app', ['title' => 'Edit Bayi'])

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                
                <div class="card">
                    <div class="card-header">Edit Bayi: {{$imunisasi->nama_imunisasi}}</div>
                    <div class="card-body">
                        <form action="/imunisasis/{{ $imunisasi->slug }}/edit" method="post">
                            @method('patch')
                            @csrf
                            @include('imunisasis.kembar.form-control')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@stop