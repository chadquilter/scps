@extends('layouts.front')

@section('content')
  <div class="container">
    <div class="card">
      <div class="card-header"><h4 class="display-4">{{ __($title) }}</h4></div>
      <div class="card-body alt-color">
        <div class="row">
          <div class="col">
              <h1>{{ __('Middle School & High School Registration:')}}</h1>
              <p class="lead">
              {{ __('Thank you for your interest in Space City Preparatory. Your child’s education and training are very important to us and we want to assist you in making the right choice. Every school is different and not every learning environment is best suited for every child. California Crosspoint Academy offers an excellent and comprehensive college – preparatory academic program in a highly structured but supportive learning community. We encourage you to visit many schools and to ask a lot of questions. Be sure you pick the school that is the best match for your child.')}}
              </p>
              <br>
              <a class="btn btn-primary" href="\documents">Application .PDF</a>
          </div>
          <div class="col">
            @include('inc.sidebarlinks')
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
