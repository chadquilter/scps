@extends('layouts.front')

@section('content')
  <div class="container">
    <div class="card">
      <div class="card-header"><h4 class="display-4">{{ __($title) }}</h4></div>
      <div class="card-body alt-color">
        <div class="row">
          <div class="col">
              <h1>{{ __('Daily Schedules')}}</h1>
              <p class="lead">
              {{ __('')}}
              </p>

          </div>
          <div class="col col-sm-4 col-md-4 col-lg-4">
            @include('inc.sidebarlinks')
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
