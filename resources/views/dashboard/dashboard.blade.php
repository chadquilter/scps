@extends('layouts.app')

@section('content')
  <div class="sub-container">
    <div class="card">
      <div class="card-header">
        <h4 class="display-4">Dashboard </h4>
      </div>
      <div class='card-body alt-color'>
        <div class="row">
          <h3 class="col"><strong> Welcome {{ Auth::user()->name }}</strong></h3>
          <h3 class="col text-md-right"><strong> {{ $dt }} </strong></h3>
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
