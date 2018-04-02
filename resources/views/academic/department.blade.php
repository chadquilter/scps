@extends('layouts.front')

@section('content')
  <div class="container">
    <div class="card">
      <div class="card-header"><h2 class="display-2">{{ __($title) }}</h2></div>
      <div class="card-body alt-color">
        <div class="row">
          <div class="col">
            <ul class="departmentlisting">
              <li>
                <a id="englishbutton" href="#" class="btn btn-primary btn-block">
              </li>
              <li class="english_div">
                @include('academic.departments.english')
              </li>
            </ul>
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
  $(".department_button").onclick() {(
    var sibling = node.nextElementSibling;
    $(".departmentbutton").toggle();
    $("."sibling.class).show();
    $("."sibling.class).hide();
  )};


  </script>
@endsection
