@extends('layouts.front')

@section('content')
  <div class="container">
    <div class="card">
      <div class="card-header"><h2 class="display-2">{{ __($title) }}</h2></div>
      <div class="card-body alt-color">
        <div class="row">
          <div class="col">
            <div class="english_div">
              @include('academic.departments.english')
              <a id="englishbutton" href="#" class="btn btn-primary btn-block">
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
    $(".department_button").toggle();
    $(".department_div").show();
    $(".department_div").hide();
  </script>
@endsection
