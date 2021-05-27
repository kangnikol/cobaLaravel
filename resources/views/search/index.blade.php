@extends('layout/main')

@section('title', 'Search Result - Web Laravel')

@section('container')
 <div class="container">
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="mt-3">
                    <h1>Search Result</h1> 
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                </div>
            </div>
                    @endif   
                    <ul class="list-group">
                        @foreach (array_merge($data, $datas) as $src)        
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{ $src->nama }}
                            <a href="/datas/{{ $src->id }}" class="badge bg-success rounded-pill">Detail</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection