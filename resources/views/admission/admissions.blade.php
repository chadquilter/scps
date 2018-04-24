@extends('layouts.front')

@section('content')
  <div class="sub-container">
    <div class="card">
      <div class="card-header"><h4 class="display-4">{{ __($title) }}</h4></div>
      <div class="card-body alt-color">
        <div class="row">
          <div class="col">
              <h1>{{ __('Private School Enrollment')}}</h1>
              <p class="lead">
              {{ __('Our admissions policy is simple: we welcome any student who can benefit from our educational program. We enroll our students without regard to race, color, or national and ethnic origin.')}}
              </p>

              <p class="lead">
              {{ __('We recommend that students considering SCPS and FCA bring their families and schedule a tour of our campus to become familiar with our academic programs and our nurturing, small-school environment. If you are interested in attending SCPS and FCA, please fill out our application for admission and submit it at any time during the school year, up to two years in advance. Our admissions director will contact you once we’ve received your application. We do have limited financial aid available.')}}
              </p>
              <p class="lead">
              {{ __('If you are an international student, please visit our International Program page for admission details.')}}
              </p>
          </div>
          <div class="col col-md-6 col-lg-4">
            @include('inc.sidebarlinks')
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
