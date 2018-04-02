@extends('layouts.front')

@section('content')
  <div class="container">
    <div class="card">
      <div class="card-header"><h2 class="display-2">{{ __($title) }}</h2></div>
      <div class="card-body alt-color">
        <div class="row">
          <div class="col">
              <div href="#" id="departmentButton" class="btn btn-primary btn-block">English</div>
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
  <div class="mod_wrap">
    <div class="t_mod_box">
        <a href="#" class="edittopic" name="send">Toggle</a>
    </div>

    <div class="t_edit_cont">
       Show hide content inside here... 1
    </div>
</div>
  <script>
  //gets next available node from button and hides it
  $( "#departmentButton" ).click(function() {
    $(this).parent().next(".departmentDiv").toggle();
  });


  </script>
@endsection
