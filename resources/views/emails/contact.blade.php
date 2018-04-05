@extends('layouts.email')

@section('content')
  <div class="container">
    <div class="card">
      <div class='card-body alt-color'>
        <div class="row">
          <div class="col col-auto">
            <img alt="{{ config('app.name', 'Space City Preparatory') }}" src="{{ asset(/images/scps_logo.png)}} " height="140">
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
        <hr>
        <div>
          <strong>From: </strong> {{ $contactName }}
          <br>
          <strong>Date: </strong> {{ $contactDate }}
          <br>
          <strong>Phone: </strong> {{ $contactPhone }}
          <br>
          <strong>Email: </strong> {{ $contactEmail }}
        </div>
        <br>
        <hr>
        <div>
          <strong>Notes: </strong> {{ $contactNotes }}
        </div>
      </div>
    </div>
  </div>
@endsection
