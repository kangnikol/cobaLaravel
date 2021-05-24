@extends('layout/main')

@section('title', 'Data - Web Laravel')

@section('container')
 <div class="container">
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="mt-3">
                    <h1>Data</h1> 
                    <a href="/data/create" class="btn btn-primary my-3">Tambah data</a> 
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                </div>
            </div>
                    @endif   
                    <ul class="list-group">
                        @foreach ($data as $data)        
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{ $data->nama }}
                            <a href="/data/{{ $data->id }}" class="badge bg-success rounded-pill">Detail</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection