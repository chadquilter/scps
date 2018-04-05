@extends('layouts.front')

@section('content')
  <div class="container">
    <div class="card">
      <div class="card-header"><h3 class="display-3">{{ __($title) }}</h3></div>
      <div class="card-body alt-color">
        <div class="row">
          <div class="col">

            @include('inc.messages')
            <div id="after_submit"></div>
            <div class="main-color text-light sidebar_pad shadow_only">
              <h4 class="display-4">{{__('Feel free to contact us anytime.')}}</h4>

            </div>
            <br>
            <div class="card">
              <div class="card-header">
                <h4>Contact Form:</h4>
                <small>All Fields Required.</small>
              </div>
              <div class="card-body">
            <form id="contact_form" action={{ url('/contact/store')  }} method="POST" enctype="multipart/form-data">
              @csrf

              <div class="form-group row">
                <label for="name" class="col-sm-4 col-form-label text-md-right"><strong>{{ __('Your Name:') }}</strong></label>
                <div class="col-md-6">
                  <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                </div>
              </div>

              <div class="form-group row">
                <label for="email" class="col-sm-4 col-form-label text-md-right"><strong>{{ __('Your Email:') }}</strong></label>
                <div class="col-md-6">
                  <input id="text" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                </div>
              </div>

              <div class="form-group row">
                <label for="phone" class="col-sm-4 col-form-label text-md-right"><strong>{{ __('Your Phone:') }}</strong></label>
                <div class="col-md-6">
                  <input id="phone" type="phone" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required autofocus>
                </div>
              </div>

              <div class="form-group row">
                <label for="notes" class="col-sm-4 col-form-label text-md-right"><strong>{{ __('Message:') }}</strong></label>
                <div class="col-md-6">
                  <textarea id="notes" rows="7" cols="40" class="form-control{{ $errors->has('notes') ? ' is-invalid' : '' }}" name="notes" required autofocus>{{ old('notes') }}</textarea>
                </div>
              </div>

                <div class="form=group row">
                  <div class="col-lg float-right">
                    <input id="submit_button" type="submit" value="Send email" />
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
            <br>
            <div class="col">
              @include('inc.sidebarcontacts')
            </div>
          </div>

        </div>
      </div>
    </div>
  @endsection
