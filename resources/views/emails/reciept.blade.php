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
          <h4 class="display-4">Message Recieved!</h4>
        </div>
        <div class="card">
          <div class="card-body shadow_only">
            <hr class="style-two">
            <p class="lead">Thank You {{ $contactName }} for contacting us! <br> A representative will be contacting you shortly.</p>
            <p class="lead">Have a Wonderfull Day!</p>
            <br>
            <div class="row">
              <div class="col">
                <div class="main-color text-light sidebar_pad shadow_only">

                  <p class="shadow_text">
                    2018,  {{ config('app.name', 'SCPS') }}
                  </p>
                  <hr class="style-two1">
                  <p class="shadow_text">
                    Private Middle & High School
                    Houston, TX | Pasadena, TX | Marblefalls, TX
                  </p>
                  <hr class="style-two1">
                  <address class="shadow_text">
                    P.O. Box 590743 <br>
                    Houston, TX<br>
                    77259 U.S<br>
                    Phone: (832) 205-2160
                  </address>
                </div>
                <hr class="style-two">
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>
    </div>
  @endsection
