@extends('layouts.front')

@section('content')
  <div class="container">
    @include('gallery.gallery')
  </div>
  <br>
  @include('inc.photothumb')
@endsection
