@extends('layouts.front')

@section('content')
  <div class="sub-container">
    <div class="card">
      <div class="card-header">
        <h4 class="display-4">Dashboard </h4>
      </div>
      <div class='card-body alt-color'>
        <div class="row">
          <p class="col lead"><strong> Welcome {{ Auth::user()->name }}</strong></p>
          <p class="col lead text-md-right"><strong> {{ $dt }} </strong></p>
        </div>
        @include('inc.dashmenu')
        <hr>
        @include('inc.messages')
        <br>
        @if (session('status'))
          <div class="alert alert-success">
            {{ session('status') }}
          </div>
        @endif
      </div>
    </div>
  </div>
@endsection
