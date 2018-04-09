<div class="card">
  <div class="card-header">
    <h1>{{__('Electives')}}</h1>
  </div>
  <div class="card-body shadow_only">
    <p class="lead">{{ __('Electives are an opportunity for students to develop their skills and interests in particular fields. Students are graded primarily on participation and effort and are encouraged to think and live beyond themselves and to discover their life’s mission and goal.')}}</p>
    <hr class="style-two">

    <input type="button"  class="btn btn-outline-primary btn-block subdept-button" value="{{__('List of Electives')}}">
    <div class="card elecdepartmentDiv">
      <div class="card-header">
        <h1>{{ __('List of Electives')}}</h1>
      </div>
      <div class="card-body">
        <p class="lead">
          <ol>
            @foreach($electives as $elective)
            {{ __($elective)}}
            @endforeach

          </ol>
        </p>
      </div>
    </div>

  </div>
</div>

<script>
$(".elecdepartmentDiv").hide();
$(".subdept-button").click(function() {
  $(this).next(".elecdepartmentDiv").toggle();
});
</script>
