@extends('layout/main')

@section('title', 'About - Web Laravel')

@section('container')

<div class="container content-wrapper">
  <div class="container">
    <div class="container">
      <h1>About me!</h1>
      
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{$nama}}</h5>
          <h6 class="card-subtitle mb-2 text-muted">Trainee on PT. Senja Solusi</h6>
          <p class="card-text">Work here I'm realise that programming is pretty hard and fun!</p>
        </div>
      </div>  
    </div>
  </div>
</div>
@endsection