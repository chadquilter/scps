
<div class="card border-0">
  <div class="card-body main-color">
    @include('inc.messages')
    <h4 class="shadow_text">{{ __('Contact Us!') }}</h4>
    <hr>
    <form id="contact_form_mini" action={{ url('/contact/store')  }} method="POST" enctype="multipart/form-data">
      @csrf
      <div class="form-group row">
        <div class="col">
          <label for="name" class="shadow_text col-form-label"><strong>{{ __('Name:') }}</strong></label><br>
          <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
        </div>
      </div>
      <div class="form-group row">
        <div class="col">
          <label for="email" class="shadow_text col-form-label"><strong>{{ __('Email:') }}</strong></label><br>
          <input id="text" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
        </div>
      </div>
      <div class="form-group row">
        <div class="col">
          <label for="phone" class="shadow_text col-form-label"><strong>{{ __('Phone:') }}</strong></label><br>
          <input id="phone" type="phone" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required autofocus>
        </div>
      </div>
      <div class="form-group row">
        <div class="col">
          <label for="notes" class="shadow_text col-form-label"><strong>{{ __('Message:') }}</strong></label><br>
          <textarea id="notes" rows="7" cols="40" class="form-control{{ $errors->has('notes') ? ' is-invalid' : '' }}" name="notes" required autofocus>{{ old('notes') }}</textarea>
        </div>
      </div>
      <div class="form=group">
        <input id="submit_button" type="submit" class="btn btn-primary" value="{{ __('Send Email')}}" />
      </div>
    </form>
  </div>
</div>
