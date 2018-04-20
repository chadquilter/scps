<div class="container">
<footer class="footer navbar main-color text-white">

      <div class="row">

          <div class="col">
            <p class="shadow_text">
              {{_('2018, '.config('app.name', 'SCPS'))}}
            </p>
            <hr class="style-two">
            <p class="shadow_text">
              {{_('Private Middle & High School')}}
              Houston, TX | Pasadena, TX | Marblefalls, TX
            </p>
            <hr class="style-two">
            <address class="shadow_text">
              P.O. Box 590743 <br>
              Houston, TX<br>
              77259 U.S<br>
              Phone: (832) 205-2160
            </address>
          </div>

          <div class="col">
            <p class="shadow_text">
              {{ __('Quick Links') }}
            </p>
            <hr>
            <ul class="nav nav-pills nav-fill main-color">
              <li class="nav-item">
                <a class="nav-link active" href="/application">{{__('New Students Apply')}}</a>
              </li>
            </ul>
            <br>
            <ul class="nav nav-pills nav-fill main-color">
              <li class="nav-item">
                <a class="nav-link active" href="/powerschool">{{__('Powerschool')}}</a>
              </li>
            </ul>
          </div>

          <div class="col">
            @include('contact.contactmini')
          </div>



      </div>

</footer>
</div>
