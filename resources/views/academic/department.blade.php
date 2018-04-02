@extends('layouts.front')

@section('content')
  <div class="container">
    <div class="card">
      <div class="card-header"><h2 class="display-2">{{ __($title) }}</h2></div>
      <div class="card-body alt-color">
        <div class="row">
          <div class="col">
              <div id=ebuttonDIV>
                <a id="englishbutton" href="#" class="btn btn-primary btn-block">English</a>
              </div>
              <div id="englishDiv">
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
  $(".department_button").onclick() (
    $sibling = $(this).next();
    $sibling.toggle();
    $sibling.show();
    $sibling.hide();
  );


  </script>
@endsection
