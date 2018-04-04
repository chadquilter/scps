@extends('layouts.front')

@section('content')
  <div class="container">
    <div class="card">
      <div class="card-header"><h3 class="display-3">{{ __($title) }}</h3></div>
      <div class="card-body alt-color">
        <div class="row">
          <div class="col">
              <h1>{{ __('Administration')}}</h1>
              <p class="lead">
              {{ __('Our administration is here to work with you!')}}
              </p>
              <h1>{{ __('Creativtiy')}}</h1>
              <p class="lead">
              {{ __('')}}
              </p>
              <h1>{{ __('Methodology')}}</h1>
              <p class="lead">
              {{ __('We want to make sure the teacher is the key to the classroom.
              We want to equip our teachers to teach: spiritual health, professional training, tools and resources, supportive and positive environment.
              We want to work in partnership with parents and emphasize comprehensive development: academic, physical, psychological, social, cultural.')}}
              </p>
          </div>
          <div class="col">
            @include('inc.sidebarlinks')
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
