<div class="container">
<footer class="footer navbar main-color text-white">
  <div class="foot-container">
    <div class="footer-top-1">
      &nbsp;
    </div>
    <div class="footer-text">
        <div class="row">
          <div class="col">
            <p class="lead">
              2018,  {{ config('app.name', 'SCPS') }}
            </p>
            <hr>
            <address class="shadow_text">
              P.O. Box 590743 <br>
              Houston, TX<br>
              77259 U.S<br>
              Phone: (832) 205-2160
            </address>
          </div>
          <div class="col">
            <p class="lead">
              Quick Links
            </p>
            <br>
            <ul class="nav nav-pills nav-fill main-color">
              <li class="nav-item">
                <a class="nav-link active" href="/aplication">New Students Apply</a>
              </li>
            </ul>
            <br>
            <ul class="nav nav-pills nav-fill main-color">
              <li class="nav-item">
                <a class="nav-link active" href="/powerschool">Powerschool</a>
              </li>
            </ul>
          </div>
          <div class="col">
            @include('contact.contactmini')
          </div>
        </div>
    </div>
  </div>
</footer>
</div>
