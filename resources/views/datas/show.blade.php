@extends('layout/main')

@section('title', 'Data - Web Laravel')

@section('container')

<div class="container">
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="mt-3">
                    <h1>Alternative data</h1>
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $datas ->nama}}</h5>
                            <h6 class="card-title text-muted">{{ $datas->telp }}</h6>
                            <p class="card-text">{{ $datas->alamat}}</p>
                            <a href="{{$datas->id}}/edit" class="btn btn-success">Edit</a>
                            <form action="{{ $datas->id}}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            <a href="/datas" class='btn btn-primary'>Back</a>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>

@endsection