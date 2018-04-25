@extends('layouts.front')

@section('content')


<script>
$(function() {

  // page is now ready, initialize the calendar...

  $('#calendar').fullCalendar({
    // put your options and callbacks here
  })

});

</script>

<div class="jumbotron">
  <div id='calendar'>test</div>
</div>
