
  <div class="main-color">

        @include('inc.messages')
        <div id="after_submit"></div>
        <form id="contact_form" action={{ url('/contact/store')  }} method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form=group">
            <label class="required" for="name"><strong>Your name: (required)</strong></label>
            <br>
            <input id="name" class="input" name="name" type="text" value="" size="10" /><br />
            <span id="name_validation" class="error_message"></span>
          </div>
          <div class="form=group">
            <label class="required" for="email"><strong>Your email: (required)</strong></label>
            <br>
            <input id="email" class="input" name="email" type="text" value="" size="10" /><br />
            <span id="email_validation" class="error_message"></span>
          </div>
          <div class="form=group">
            <label class="required" for="phone"><strong>Your phone: (required)</strong></label>
            <br>
            <input id="phone" class="input" name="phone" type="text" value="" size="10" /><br />
            <span id="phone_validation" class="error_message"></span>
          </div>
          <div class="form=group">
            <label class="required" for="message"><string>Message: (required)</strong></label>
              <br>
              <textarea id="description" class="input" name="description" rows="7" cols="10"></textarea><br />
              <span id="description_validation" class="error_message"></span>
            </div>
            <div class="form=group">
              <input id="submit_button" type="submit" value="Send email" />
            </div>
          </form>
        </div>

    </div>
