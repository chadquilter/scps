@extends('layouts.front')

@section('content')
  <div class="container">
    <div class="alt-color">
      @include('gallery.gallery')
      <br>
      @include('inc.photothumb')
      <br>
    </div>
  </div>

@endsection
