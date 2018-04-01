@extends('layouts.front')

@section('content')
<div class="container">
<div class="card mx-auto border border-secondary text-left">
  <div class="card-body">

@include('inc.messages')
<div id="after_submit"></div>
<form id="contact_form" action={{ route('Contact/store') }} method="POST" enctype="multipart/form-data">
  @csrf
  <div class="row">
    <label class="required" for="name">Your name:</label><br />
    <input id="name" class="input" name="name" type="text" value="" size="30" /><br />
    <span id="name_validation" class="error_message"></span>
  </div>
  <div class="row">
    <label class="required" for="email">Your email:</label><br />
    <input id="email" class="input" name="email" type="text" value="" size="30" /><br />
    <span id="email_validation" class="error_message"></span>
  </div>
  <div class="row">
    <label class="required" for="phone">Your phone:</label><br />
    <input id="phone" class="input" name="phone" type="text" value="" size="30" /><br />
    <span id="phone_validation" class="error_message"></span>
  </div>
  <div class="row">
    <label class="required" for="message">Messgae:</label><br />
    <textarea id="description" class="input" name="description" rows="7" cols="30"></textarea><br />
    <span id="description_validation" class="error_message"></span>
  </div>

    <input id="submit_button" type="submit" value="Send email" />
</form>
</div>
</div>
</div>

@endsection
