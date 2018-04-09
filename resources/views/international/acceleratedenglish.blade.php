@extends('layouts.front')

@section('content')
  <div class="container">
    <div class="card">
      <div class="card-header"><h3 class="display-3">{{ __($title) }}</h3></div>
      <div class="card-body alt-color">
        <div class="row">
          <div class="col">
              <h1>{{ __('Accelerated English Camp')}}</h1>
              <p class="lead">
              {{ __('Accelerated English Camp is specifically designed to help students transition to an American high school on an academic, social, and personal level. The intensive four-week program will provide students with instruction on American culture and norms, strengthen their conversational English, and increase their academic vocabulary in order to prepare them for entering an American high school shortly thereafter.')}}
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
