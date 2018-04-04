@extends('layouts.app')

@section('content')
<div class="container">
  <div class="jumbotron">
    <h4 class="display-4">Dashboard </h4>

    <div class="card mx-auto">
      <br>
      <div class="card-body">
        <p class="lead"><strong> Welcome {{ Auth::user()->name }}</strong></p>
        <p class="lead"><strong> {{ $dt }} </strong></p>
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
</div>
@endsection
