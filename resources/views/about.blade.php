@extends('layout/main')

@section('title', 'About - Web Laravel')

@section('container')

<div class="container">
  <div class="row-3">
    <div class="mt-3">
      <h1>About me!</h1>
      <div class="card mt-3" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{$nama}}</h5><br>
          <h6 class="card-title text-muted">Trainee on PT. Senja Solusi</h6>
          <p class="card-text">Work here I'm realise that programming is pretty hard and fun!</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection