@extends('layouts.front')

@section('content')
  <div class="container">
    <div class="alt-color">
      @include('gallery.gallery')
      <div>
        @include('inc.photothumb')
      </div>
    </div>
  </div>

@endsection
