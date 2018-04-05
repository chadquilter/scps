
  <div class="main-color">

        @include('inc.messages')
        <h4 class="shadow_text">Contact Us!</h4>
        <hr>
        <form id="contact_form_mini" action={{ url('/contact/store')  }} method="POST" enctype="multipart/form-data">
          @csrf
          <input type=hidden value="mini"> 
          <div class="form-group row">
            <label for="name" class="shadow_text col-sm-4 col-form-label text-md-right"><strong>{{ __('Name:') }}</strong></label>
            <div class="col-md-6">
              <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
            </div>
          </div>

          <div class="form-group row">
            <label for="email" class="shadow_text col-sm-4 col-form-label text-md-right"><strong>{{ __('Email:') }}</strong></label>
            <div class="col-md-6">
              <input id="text" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
            </div>
          </div>

          <div class="form-group row">
            <label for="phone" class="shadow_text col-sm-4 col-form-label text-md-right"><strong>{{ __('Phone:') }}</strong></label>
            <div class="col-md-6">
              <input id="phone" type="phone" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required autofocus>
            </div>
          </div>

          <div class="form-group row">
            <label for="notes" class="shadow_text col-sm-4 col-form-label text-md-right"><strong>{{ __('Message:') }}</strong></label>
            <div class="col-md-6">
              <textarea id="notes" rows="7" cols="40" class="form-control{{ $errors->has('notes') ? ' is-invalid' : '' }}" name="notes" required autofocus>{{ old('notes') }}</textarea>
            </div>
          </div>
            <div class="form=group">
              <input id="submit_button" type="submit" value="Send email" />
            </div>
          </form>
        </div>

    </div>
