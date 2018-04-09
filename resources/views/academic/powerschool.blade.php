@extends('layouts.front')

@section('content')
  <div class="container">
    <div class="card">
      <div class="card-header"><h3 class="display-3">{{ __($title) }}</h3></div>
      <div class="card-body alt-color">
        <div class="row">
          <div class="col">
              <h1>{{ __('Scope of our Mission')}}</h1>
              <p class="lead">
              {{ __('PowerSchool is the fastest-growing, most widely used web-based student information system in today’s academic world. PowerSchool enables SCPS educators to make timely decisions that impact student performance while creating a collaborative environment for parents, teachers and students to work together in preparing 21st century learners for the future.')}}
              </p>
              <h1>{{ __('Governance and Operations')}}</h1>
              <p class="lead">
              {{ __('PowerSchool provides the SCPS staff with the full range of features needed, in addition to portals for teachers, parents, and students.  With internet access and the touch of a keyboard, parents and students can read the daily announcements, check grades, upcoming assignments, attendance, medical records, lunch balances, email teachers and much more!')}}
              </p>
              <h1>{{ __('Methodology')}}</h1>
              <p class="lead">
              {{ __('Current parents and students may login at any time.')}}
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
