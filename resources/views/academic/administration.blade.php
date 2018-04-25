@extends('layouts.front')

@section('content')
  <div class="sub-container">
    <div class="card">
      <div class="card-header"><h1><strong>{{ __($title) }}</strong></h1></div>
      <div class="card-body alt-color">
        <div class="row">
          <div class="col">
            <h1>{{ __('Dedicated Staff & Faculty')}}</h1>
            <hr class="style-two">
            <div class="row">
              <div class="col">
                  @foreach ($admin as $profile)
                  <div class="card shadow_only">
                    <div class="card-img-top img-fluid embed-responsive">
                      <img class="img-fluid embed-responsive" src="{{ $profile["link"]}}" alt="Dedicated Staff to help you out!">
                    </div>
                    <div class="card-footer">
                      <div class="card-text">
                        {{ __($profile["label"]) }}
                        @include('schedule.cal')
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
          </div>
          <div class="col col-lg-4 col-xl-4">
            @include('inc.sidebarlinks')
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
