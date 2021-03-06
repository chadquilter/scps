@extends('layouts.front')

@section('content')
  <div class="sub-container">
    <div class="card">
      <div class="card-header"><h1><strong>{{ __($title) }}</strong></h1></div>
      <div class="card-body alt-color">
        <div class="row">
          <div class="col">
              <h1>{{ __('International Partners Welcome!')}}</h1>
              <hr class="style-two">
              <p class="lead">
              {{ __('Space City Preparatory has a highly esteemed international reputation for developing programs that combine the best teaching resources and methods of the East and the West. SCPS staff regularly work with schools and education organizations overseas to provide expertise and experience in providing a transformative education that prepares students for the best universities in the world.')}}
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
