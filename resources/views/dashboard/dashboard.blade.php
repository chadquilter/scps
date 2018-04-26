@extends('layouts.front')

@section('content')
  <div class="sub-container">
    <div class="card">
      <div class='card-body alt-color'>
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
  </div>
@endsection
