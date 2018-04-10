@extends('layouts.front')

@section('content')
  <div class="container">
    <div class="card">
      <div class="card-header"><h4 class="display-4">{{ __($title) }}</h4></div>
      <div class="card-body alt-color">
        <div class="row">
          <div class="col">
              <h1>{{ __('Dedicated Staff & Faculty')}}</h1>
              <p class="lead">
              {{ __('Our administration is here to work with you!')}}
              </p>
              <div class="row">
                <div class="col">
                  @foreach ($admin as $profile)
                  <div class="card shadow_only">
                    <div class="card-img-top">
                      <img src="{{ $profile["link"]}}">
                    </div>
                    <div class="card-body">
                      {{$profile["label"]}}
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
          </div>
          <div class="col">
            @include('inc.sidebarlinks')
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
