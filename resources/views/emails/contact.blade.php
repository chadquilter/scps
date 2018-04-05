@extends('layouts.email')

@section('content')
  <div class="container">

        <div class="row">
          <div class="col col-auto">
            <img alt="{{ config('app.name', 'Space City Preparatory') }}" src="{{ asset('/images/scps_logo.png')}} " height="140">
          </div>
          <div class="col col-sm-10">
            <div class="row">
              <div class="col">
                <h1 class="display-4" style="text-align: left; color: #FAEBD7; text-shadow: .5rem .5rem 1rem #000000;">{{__('Space City Preparatory School')}}</h1>
                <h5 style="text-align: left; color: #FAEBD7; text-shadow: .5rem .5rem 1rem #000000; font-style: oblique;">{{__('~ Educating The World.')}}</h5>
              </div>
            </div>
          </div>
    </div>
    <hr class="style-two">
    <div class="card">
      <div class='card-body alt-color'>
        <div class="main-color text-light sidebar_pad shadow_only">
          <h4 class="display-4">Contact sent from:</h4>
        </div>
        <div class="card">
        <div class="card-body shadow_only">
          <p class="lead">{{ $contactName }}</p>
          <hr class="style-two">
          <strong>Date:</strong>
          <p class="lead">{{ $contactDate }}</p>
          <strong>Phone:</strong>
          <p class="lead">{{ $contactPhone }}</p>
          <strong>Email:</strong>
          <p class="lead">{{ $contactEmail }}</p>
        </div>
      </div>
      <br>
      <div class="main-color text-light sidebar_pad shadow_only">
        <h4 class="display-4">Message:</h4>
      </div>
      <div class="card">
        <div class="card-body shadow_only">
          <hr class="style-two">
          <p class="lead">{{ $contactNotes }}</p>
          <hr class="style-two">
        </div>
      </div>
    </div>
  </div>
  <br>
</div>
@endsection
