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
                    <div class="alert alert-success mt-3">
                        {{ session('status') }}
                    </div>
                    @endif
                </div>
            </div>
                    <table class="table table-hover mt-3">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        @foreach ($data as $dt)       
                        <tbody>
                          <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $dt->nama }}</td>
                                <td><div class="justify-content-right align-items-right"><a href="/data/{{ $dt->id }}" class="badge bg-success rounded-pill">Detail</a></div></td>
                          </tr>
                        </tbody>
                        @endforeach
                      </table>
                    {{-- <ul class="list-group d-flex mt-3">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{ $dt->nama }}
                        </li>
                    </ul> --}}
                </div>
            </div>
        </div>
        <div class="h-100 d-flex justify-content-center align-items-center mt-3">
            {{$data->links()}}
        </div>
    </div>
</div>

@endsection