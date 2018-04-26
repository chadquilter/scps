@extends('layouts.front')

@section('content')
  <div class="sub-container">
    <div class="card">
      <div class="card-header">
        <h4 class="display-4">Dashboard </h4>
      </div>
      <div class='card-body alt-color'>
        <p class="lead"><strong> Welcome {{ Auth::user()->name }}, today is: {{ $dt }} </strong></p>
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
