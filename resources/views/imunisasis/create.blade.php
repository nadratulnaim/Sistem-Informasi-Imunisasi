@extends('layouts.app', ['title' => 'Tambah Data'])

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                
                <div class="card">
                    <div class="card-header">Tambah Data</div>
                    <div class="card-body">
                        <form action="/imunisasis/tambah" method="post">
                            @csrf
                            @include('imunisasis.kembar.form-control', ['submit' => 'Create'])
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@stop