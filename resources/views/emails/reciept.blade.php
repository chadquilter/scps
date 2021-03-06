@extends('layouts.email')

@section('content')
  <div class="sub-container">
    <br>
    <img alt="{{ config('app.name', 'Space City Preparatory') }}" src="{{ asset('/images/scps_logo_sm.png')}} " height="140">
    <br>
    <h1 class="display-4" style="text-align: left; color: #FAEBD7; text-shadow: .5rem .5rem 1rem #000000;">{{__('Space City Preparatory School')}}</h1>
    <h5 style="text-align: left; color: #FAEBD7; text-shadow: .5rem .5rem 1rem #000000; font-style: oblique;">{{__('~ Educating The World.')}}</h5>
    <hr class="style-two">
    <div class="card">
      <div class='card-body alt-color'>
        <div class="main-color text-light shadow_only">
          <h4 class="display-4">{{ __('Message Recieved!')}}</h4>
        </div>
        <div class="card">
          <div class="card-body shadow_only">
            <p class="lead">{{ __('Thank You')}} {{ $contactName }} {{ __('for contacting us!')}}
              <br>
              {{ __('A representative will be contacting you shortly.')}}
            </p>
            <hr class="style-two">
            {{ __('Have a Wonderfull Day!')}}
          </br>
            {{ __('Best, regards.')}}
          </p>
            <br>
          </div>
          <div class="card-footer">
            <small>
              {{ __('This email was intended for')}} {{ $contactName }} {{__('at')}} {{ $contactEmail }}. {{ __('Please do not reply, replies to this message are undeliverable and will not reach Space City Prepartory.')}}
            </small>
          </div>
        </div>
        <br>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="main-color text-light sidebar_pad shadow_only">
          <p class="shadow_text">
            2018,  {{ config('app.name', 'SCPS') }}
          </p>
          <hr class="style-two1">
          <p class="shadow_text">
            {{ __('Private Middle & High School')}}
            Houston, TX | Pasadena, TX | Marblefalls, TX
          </p>
          <hr class="style-two1">
          <address class="shadow_text">
            P.O. Box 590743 <br>
            Houston, TX<br>
            77259 U.S<br>
            Phone: (832) 205-2160
          </address>
          <br>
        </div>
      </div>
    </div>
  </div>
@endsection
