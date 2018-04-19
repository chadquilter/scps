@extends('layouts.front')

@section('content')
  <div class="container">
    <div class="card">
      <div class="card-header"><h4 class="display-4">{{ __($title) }}</h4></div>
      <div class="card-body alt-color">
        <div class="row">
          <div class="col">
              <h1><u>{{ __('Our Past:')}}</u></h1>
              <p class="lead">
              {{ __('We started as a small school in Houston, TX that emphisized quality over quantity teaching practices.')}}
              </p>
              <h1><u>{{ __('Our Present:')}}</u></h1>
              <p class="lead">
              {{ __('Our school has grown to include a brand new campus with camps and elective programs in Austin as well as Houston, TX.')}}
              </p>
              <h1><u>{{ __('Our Future:')}}</u></h1>
              <p class="lead">
              {{ __('We plan to keep the same quality and mentorship that made our legacy what it is today.')}}
              </p>
          </div>
          <div class="col col-md-6">
            @include('inc.sidebarlinks')
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
