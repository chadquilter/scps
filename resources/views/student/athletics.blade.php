@extends('layouts.front')

@section('content')
  <div class="sub-container">
    <div class="card">
      <div class="card-header"><h1><strong>{{ __($title) }}</strong></h1></div>
      <div class="card-body alt-color">
        <div class="row">
          <div class="col">
            <h1>{{ __('Philosophy of Athletics')}}</h1>
            <hr class="style-two">
            <p class="lead">
            {{ __('The purpose of our athletic program is to train student-athletes to manage their individual and team participation in a sportsman-like manner. This program offers its participants training to build appropriate skill sets while offering competitive opportunities to strengthen character evidenced through gracious winning and losing. It is the desire of the athletic department that every team or individual that competes at Space City Preparatory School experience the joy of rising to one’s full potential. ')}}
            </p>
          </div>
          <div class="col col-4">
            @include('inc.sidebarlinks')
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
