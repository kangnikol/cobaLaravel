@extends('layout/main')

@section('title', 'Result search - Web Laravel')

@section('container')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{$website['description']}}">
    <meta name="author" content="Eric Hu">
    
    <div class="row">
        <!-- Blog Entries Column -->
        <div class="col-md-8">
            
            <h1 class="my-4">Search Result For:
                <small>{{$key}}</small>
            </h1>
            
            @include('vendor.posts-list')
            
        </div>
        @include('vendor.sidebar')
    </div>
@endsection