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
                    <form action="/data" method="GET" role="search" class="d-flex">
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
                        @foreach ($data as $dt)        
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{ $dt->nama }}
                            <a href="/data/{{ $dt->id }}" class="badge bg-success rounded-pill">Detail</a>
                        </li>
                    </ul>
                    @endforeach
                </div>
            </div>
        </div><br>
        {{$data->links()}}
    </div>
</div>

@endsection