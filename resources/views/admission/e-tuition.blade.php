@extends('layouts.front')

@section('content')
  <div class="container">
    <div class="card">
      <div class="card-header"><h3 class="display-3">{{ __($title) }}</h3></div>
      <div class="card-body alt-color">
        <div class="row">
          <div class="col">
              <h1>{{ __('E-Tuition Application')}}</h1>
              <p class="lead">
              {{ __('By enrolling in e-Tuition you will help the school and yourself to process the tuition more effectively. Electronic fund transfers greatly reduce the time, labor, and resources needed to collect, post, record, and reconcile monthly payments. It is also safer and more accurate than handling large amounts of cash or large numbers of checks for deposit.')}}
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
