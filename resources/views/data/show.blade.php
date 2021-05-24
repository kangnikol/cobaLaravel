@extends('layout/main')

@section('title', 'Detail data - Web Laravel')

@section('container')

<div class="container">
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="mt-3">
                    <h1>Detailed data</h1>
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $data ->nama}}</h5>
                            <h6 class="card-subtitle text-muted">{{ $data->telp }}</h6>
                            <p class="card-text">{{ $data->alamat}}</p>
                            <a href="{{$data->ID}}/edit" class="btn btn-success">Edit</a>
                            <form action="{{ $data->ID}}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            <a href="/data" class='btn btn-primary'>Back</a>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>

@endsection