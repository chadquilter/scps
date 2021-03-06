@extends('layouts.front')

@section('content')
  <div class="sub-container">
    <div class="card">
      <div class="card-header"><h1><strong>{{ __($title) }}</strong></h1></div>
      <div class="card-body alt-color">
        <div class="row">
          <div class="col">
              <h1>{{ __('The Academy')}}</h1>
              <hr class="style-two">
              <p class="lead">
              {{ __('The Academy at Space City Preparatory is a transition high school program that provides intensive English instruction while allowing students to learn new content using special instructional program to develop English proficiency while continuing academic instruction in core subjects. SCPS has successfully used this curriculum and approach for years in Beijing to teach students American curriculum while at the same time strengthening their English comprehension and speaking skills.')}}
              </p>
          </div>
          <div class="col col-lg-4 col-xl-4">
            @include('inc.sidebarlinks')
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
