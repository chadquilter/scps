<script>
$(function() {
  // page is now ready, initialize the calendar...

  $('#calendar').fullCalendar({
    // put your options and callbacks here
    defaultView: 'month'
  })

});
</script>

<div class="jumbotron">
  <div class="card">
    <div class="card-body">
      <div id='calendar'></div>
    </div>
  </div>
</div>
