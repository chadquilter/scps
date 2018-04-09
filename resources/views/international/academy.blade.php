@extends('layouts.front')

@section('content')
  <div class="container">
    <div class="card">
      <div class="card-header"><h3 class="display-3">{{ __($title) }}</h3></div>
      <div class="card-body alt-color">
        <div class="row">
          <div class="col">
              <h1>{{ __('The Academy')}}</h1>
              <p class="lead">
              {{ __('The Academy at Space City Preparatory is a transition high school program that provides intensive English instruction while allowing students to learn new content using special instructional program to develop English proficiency while continuing academic instruction in core subjects. CCHS has successfully used this curriculum and approach for years in Beijing to teach students American curriculum while at the same time strengthening their English comprehension and speaking skills.')}}
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
