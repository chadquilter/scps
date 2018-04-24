@extends('layouts.front')

@section('content')
  <div class="sub-container">
    <div class="card">
      <div class="card-header"><h1><strong>{{ __($title) }}</strong></h1></div>
      <div class="card-body alt-color">
        <div class="row">
          <div class="col">
            <input type="button" id="departmentButton" class="btn btn-primary btn-block dpt-button" value="{{__('English')}}">
            <div class="departmentDiv">
              @include('academic.departments.english')
            </div>
            <hr class="style-two">
            <input type="button" id="departmentButton2" class="btn btn-primary btn-block dpt-button" value="{{__('Math')}}">
            <div class="departmentDiv">
              @include('academic.departments.math')
            </div>
            <hr class="style-two">
            <input type="button" id="departmentButton3" class="btn btn-primary btn-block dpt-button" value="{{__('History')}}">
            <div class="departmentDiv">
              @include('academic.departments.history')
            </div>
            <hr class="style-two">
            <input type="button" id="departmentButton4" class="btn btn-primary btn-block dpt-button" value="{{__('Science')}}">
            <div class="departmentDiv">
              @include('academic.departments.science')
            </div>
            <hr class="style-two">
            <input type="button" id="departmentButton5" class="btn btn-primary btn-block dpt-button" value="{{__('Visual Performing Arts')}}">
            <div class="departmentDiv">
              @include('academic.departments.arts')
            </div>
            <hr class="style-two">
            <input type="button" id="departmentButton6" class="btn btn-primary btn-block dpt-button" value="{{__('Electives')}}">
            <div class="departmentDiv">
              @include('academic.departments.electives')
            </div>
          </div>
          <div class="col col-md-4 col-lg-4 col-xl-4">
            @include('inc.sidebarlinks')
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
  //gets next available node from button and hides it
  $(".departmentDiv").hide();
  $(".dpt-button").click(function() {
    $(this).next(".departmentDiv").toggle();
  });
  </script>
@endsection
