@extends('layouts.front')

@section('content')
  <div class="sub-container">
    <div class="card">
      <div class="card-header"><h1><strong>{{ __($title) }}</strong></h1></div>
      <div class="card-body alt-color">
        <div class="row">
          <div class="col">

            @include('inc.messages')
            <div id="after_submit"></div>
            <div class="main-color text-light sidebar_pad shadow_only">
              <h1>{{__('Feel free to contact us anytime.')}}</h1>

            </div>
            <br>
            <div class="card">
              <form id="contact_form" action={{ url('/contact/store')  }} method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-header">
                  <h4>{{ __('Contact Form:')}}</h4>
                </div>

                <div class="card-body">



                  <div class="form-group row">
                    <label for="name" class="col-form-label text-md-right"><strong>{{ __('Name:') }}</strong></label>
                    <div class="col-md-6">
                      <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="email" class="col-form-label text-md-right"><strong>{{ __('Email:') }}</strong></label>
                    <div class="col-md-6">
                      <input id="text" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="phone" class="col-form-label text-md-right"><strong>{{ __('Phone:') }}</strong></label>
                    <div class="col-md-6">
                      <input id="phone" type="phone" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required autofocus>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="notes" class="col-form-label text-md-right"><strong>{{ __('Message:') }}</strong></label>
                    <br>
                    <div class="col">
                      <textarea id="notes" rows="7" cols="40" class="form-control{{ $errors->has('notes') ? ' is-invalid' : '' }}" name="notes" required autofocus>{{ old('notes') }}</textarea>
                    </div>
                  </div>

                </div>
                <div class="card-footer">
                  <div class="row">
                    <div class="col">
                      <h4></h4>
                      <small>{{ __('All Fields Required.')}}</small>
                    </div>
                    <div class="col form=group ml-auto">
                      <input id="submit_button" type="submit" value="{{ __('Send Email')}}" />
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <br>
          </div>
          <div class="col">
            @include('inc.sidebarcontacts')
          </div>
        </div>

      </div>
    </div>
  </div>
  @endsection
