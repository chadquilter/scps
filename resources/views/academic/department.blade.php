@extends('layouts.front')

@section('content')
  <div class="container">
    <div class="card">
      <div class="card-header"><h2 class="display-2">{{ __($title) }}</h2></div>
      <div class="card-body alt-color">
        <div class="row">
          <div class="col">

              <input type="button" id="departmentButton" class="btn btn-primary btn-block dpt-button" value="English">

            <div class="departmentDiv">
              @include('academic.departments.english')
            </div>

              <input type="button" id="departmentButton2" class="btn btn-primary btn-block dpt-button" value="Math">

            <div class="departmentDiv">
              @include('academic.departments.english')
            </div>
          </div>
          <div class="col">
            @include('inc.sidebarlinks')
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
  //gets next available node from button and hides it
  $(".departmentDiv").hide();
  $( ".dpt-button" ).click(function() {
    $(this).next(".departmentDiv").toggle();
  });


  </script>
@endsection
