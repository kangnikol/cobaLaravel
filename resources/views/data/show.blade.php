@extends('layout/main')

@section('title', 'Detail data - Web Laravel')

@section('container')

<div class="container">
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="mt-3">
                    <h1>Alternative data</h1>
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $dt ->nama}}</h5>
                            <h6 class="card-subtitle text-muted">{{ $dt->telp }}</h6>
                            <p class="card-text">{{ $dt->alamat}}</p>
                            <a href="{{$dt->id}}/edit" class="btn btn-success">Edit</a>
                            <form action="{{ $dt->id}}" method="post" class="d-inline">
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