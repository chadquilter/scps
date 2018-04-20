<div class="container">
<footer class="footer navbar main-color text-white">
  <div class="foot-container">
    <div class="footer-text">
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
            <hr class="style-two1">
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
          <div class="col">
            <div id="fb-root"></div>
            <script>(
              function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12';
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));

            $(function() {
              $(document).scrollTop();
            });

            $(document).ready(function(){
               $(window).scrollTop(0);
           });

          </script>
            <div class="fb-page" data-href="https://www.facebook.com/spacecityschool" data-tabs="timeline" data-width="250" data-height="250" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/spacecityschool" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/spacecityschool">Space City Preparatory School</a></blockquote></div>
          </div>

        </div>
    </div>
  </div>
</footer>
</div>
