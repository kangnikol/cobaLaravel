@extends('layout/main')

@section('title', 'Alt. Data - Web Laravel')

@section('container')
 <div class="container">
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="mt-3">
                    <h1>Alternative data</h1> 
                    <a href="/datas/create" class="btn btn-primary my-3">Tambah data</a> 
                    <form action="/datas" method="GET" role="search" class="d-flex">
                      {{-- {{csrf_field()}} --}}
                      <input class="form-control me-2 " autocomplete="off" name="search" type="text" placeholder="Search" aria-label="Search" value="{{ old('search')}}">
                      <button class="btn btn-outline-success" type="submit" value="search">Search</button>
                    </form>
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                </div>
            </div>
                    @endif   
                    <ul class="list-group mt-3">
                        @foreach ($datas as $datas)        
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{ $datas->nama }}
                            <a href="/datas/{{ $datas->id }}" class="badge bg-success rounded-pill">Detail</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection