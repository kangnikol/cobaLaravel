@extends('layout/main')

@section('title', 'Data - Web Laravel')

@section('container')

<div class="container">
    <div class="container">
        <div class="row">
            <div class="col-10">
                <div class="mt-3">
                    <h1>All data</h1>
                    <table class="table">
                        <thead class="table-dark">
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Telepon</th>
                            <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datas as $dt)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $dt->nama }}</td>
                                    <td>{{ $dt->alamat }}</td>
                                    <td>{{ $dt->telp }}</td>
                                    <td>
                                    <a href="" class="badge bg-success">edit</a>
                                    <a href="" class="badge bg-danger">delete</a>
                                    </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection