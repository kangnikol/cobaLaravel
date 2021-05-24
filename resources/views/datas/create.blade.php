@extends('layout/main')

@section('title', 'Data - Web Laravel')

@section('container')

<div class="container">
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="mt-3">
                    <h1>Alternative data</h1> 
                    <form method="POST" action="/datas">
                        @csrf
                        <div class="form-group my-3">
                          <label for="nama">Nama</label>
                          <input type="text" class="form-control @error('nama') is-invalid @enderror" autocomplete="off" id="nama" placeholder="Masukkan Nama" name="nama" value="{{ old('nama') }}">
                          @error('nama')
                          <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>
                        <div class="form-group my-3">
                          <label for="alamat">Alamat</label>
                          <input type="text" class="form-control @error('alamat') is-invalid @enderror" autocomplete="off" id="alamat" placeholder="Masukkan Alamat" name="alamat" value="{{ old('alamat') }}">
                          @error('alamat')
                          <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>
                        <div class="form-group my-3">
                          <label for="telp">Telp</label>
                          <input type="int" class="form-control @error('telp') is-invalid @enderror" autocomplete="off" id="telp" placeholder="Masukkan Telp" name="telp" value="{{ old('telp') }}">
                          @error('telp')
                          <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>
                        <button type="submit" class="btn btn-primary my-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection