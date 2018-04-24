@extends('layouts.front')

@section('content')
  <div class="sub-container">
    <div class="card">
      <div class="card-header"><h1><strong>{{ __($title) }}</strong></h1></div>
      <div class="card-body alt-color">
        <div class="row">
          <div class="col">
              <h1>{{ __('Daily Schedules')}}</h1>
              <p class="lead">
              {{ __('')}}
              </p>

          </div>
          <div class="col col-4">
            @include('inc.sidebarlinks')
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
