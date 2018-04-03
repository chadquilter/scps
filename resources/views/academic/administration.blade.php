@extends('layouts.front')

@section('content')
  <div class="container">
    <div class="card">
      <div class="card-header"><h2 class="display-2">{{ __($title) }}</h2></div>
      <div class="card-body alt-color">
        <div class="row">
          <div class="col">
              <h1>{{ __('Kendall Gherrett - Superintended')}}</h1>
              <p class="lead">
              {{ __('We want to reach all who can benefit from our school.
              We want to develop each student to their full potential.
              We want to emphasize spiritual results over academic achievement.
              We want to be faithful to our task and trust God to give the increase.')}}
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
