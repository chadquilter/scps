@extends('layouts.front')

@section('content')
  <div class="container">
    <div class="card">
      <div class="card-header"><h3 class="display-3">{{ __($title) }}</h3></div>
      <div class="card-body alt-color">
        <div class="row">
          <div class="col">
              <h1>{{ __('Administrator')}}</h1>
              <p class="lead">
              {{ __('')}}
              </p>
              <h1>{{ __('Governance and Operations')}}</h1>
              <p class="lead">
              {{ __('We want to practice servant leadership: teachers serve students; administrators serve teachers.
              We want to make what is best for our students a top priority.
              We want to emphasize the spirit of the law over the letter of the law.
              We want to emphasize ‘who we are’ is more important than ‘what we do’.
              We want to place overall, long-term benefits over expediency.')}}
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
