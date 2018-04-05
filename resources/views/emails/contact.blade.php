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
        <div class="card">
        <div class="card-body shadow_only">
          <h4 class="display-4">From:</strong> {{ $contactName }}
          <br>
          <h4 class="display-4">Date:</h4> {{ $contactDate }}
          <br>
          <h4 class="display-4">Phone:</h4> {{ $contactPhone }}
          <br>
          <h4 class="display-4">Email:</h4> {{ $contactEmail }}
        </div>
      </div>
      <br>
      <div class="card">
        <div class="card-body shadow_only">
          <strong>Notes: </strong> {{ $contactNotes }}
        </div>
      </div>
    </div>
    <br>
  </div>
</div>
@endsection
