@extends('layouts.front')

@section('content')
  <div class="sub-container">
    <div class="card">
      <div class="card-header"><h1><strong>{{ __($title) }}</strong></h1></div>
      <div class="card-body alt-color">
        <div class="row">
          <div class="col">
              <h1><u>{{ __('Scope of our Mission')}}</u></h1>
              <p class="lead">
              {{ __('We want to reach all who can benefit from our school. We want to develop each student to their full potential. We want to emphasize spiritual results over academic achievement. We want to be faithful to our task and trust God to give the increase.')}}
              </p>
              <h1><u>{{ __('Governance and Operations')}}</u></h1>
              <p class="lead">
              {{ __('We want to practice servant leadership: teachers serve students; administrators serve teachers. We want to make what is best for our students a top priority. We want to emphasize the spirit of the law over the letter of the law. We want to emphasize ‘who we are’ is more important than ‘what we do’. We want to place overall, long-term benefits over expediency.')}}
              </p>
              <h1><u>{{ __('Methodology')}}</u></h1>
              <p class="lead">
              {{ __('We want to make sure the teacher is the key to the classroom. We want to equip our teachers to teach: spiritual health, professional training, tools and resources, supportive and positive environment. We want to work in partnership with parents and emphasize comprehensive development: academic, physical, psychological, social, cultural.')}}
              </p>
          </div>
          <div class="col col-md-6 col-lg-4">
            @include('inc.sidebarlinks')
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
