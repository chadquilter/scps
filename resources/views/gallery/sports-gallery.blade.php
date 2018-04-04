@extends('layouts.front')

@section('content')
  <div class="container">
    @include('gallery.gallery')
    <br>
    @include('inc.photothumb')
    <br>
  </div>

@endsection
