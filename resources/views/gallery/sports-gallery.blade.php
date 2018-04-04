@extends('layouts.front')

@section('content')
  <div class="container">
    @include('gallery.gallery')
    <div class="card">
      <div class="card-body alt-color">
        @include('inc.photothumb')
      </div>
    </div>
  </div>
@endsection
