
<div class="container">
  <nav class="navbar navbar-expand-md navbar-dark" style="background-color: none;">
    <div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTop" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="navbarTop">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="https://crosspointacademy.org/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://crosspointacademy.org/about-us/">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://crosspointacademy.org/support-us/">Support</a>
      </li>
      <li class"nav-item">
        <a class="nav-link">
          <img src="/images/icon-phone.png" class="top-navigation-right-icon" alt="Contact Space City Preparatory Today at (832) 205-2160."/>
          (832) 205-2160
        </a>
      </li>
    </ul>
  </nav>

  <div class="row">
    <div class="col col-auto">
      <img alt="{{ config('app.name', 'Space City Preparatory') }}" src="/images/scps_logo.png" height="140">
    </div>
    <div class="col col-8">
      <div class="row">
        <div class="col">
          <h1 class="display-4" style="text-align: left; color: #FAEBD7; text-shadow: 2px 2px 4px #000000;">{{ config('app.name', 'Space City Preparatory') }}</h1>
          <h5 style="text-align: left; color: #FAEBD7; text-shadow: 2px 2px 4px #000000; font-style: oblique;"> ~ Educating The World.</h5>
        </div>
        <!-- Split dropup button -->
        <div class="col float-sm-right">
          <button class="btn btn-secondary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            English
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">English</a>
            <a class="dropdown-item" href="#">简体中文 Chinese (Simplified)</a>
          </div>
          <br>
          <form class="form-inline">
            <div class="input-group">
              <div class="input-group-prepend">
                <input type="text" class="form-control form-control-sm" placeholder="Search" aria-label="Search" aria-describedby="basic-addon1">
              </div>
              <button class="btn main-color border border-dark btn-sm text-light" type="button" style="">Search</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <br>
  <nav class="navbar navbar-expand-md navbar-dark border border-dark main-color">
    <div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item {{ ( \Request::url() == url('') ) ? 'active' : '' }}">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="{{ url('') }}" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Academics</a>
          <div class="dropdown-menu" aria-labelledby="Academics">
            <a class="dropdown-item {{ ( \Request::url() == url('ac') ) ? 'active' : '' }}" href="/ac">Academic Calander</a>
            <a class="dropdown-item {{ ( \Request::url() == url('schedule') ) ? 'active' : '' }}" href="/schedule">Daily Schedule</a>
            <a class="dropdown-item {{ ( \Request::url() == url('departments') ) ? 'active' : '' }}" href="/elec">Departments</a>
            <a class="dropdown-item {{ ( \Request::url() == url('ps') ) ? 'active' : '' }}" href="/concrete">PowerSchool</a>
            <a class="dropdown-item {{ ( \Request::url() == url('schooladmin') ) ? 'active' : '' }}" href="/homes">Administration</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="{{ url('') }}" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admissions</a>
          <div class="dropdown-menu" aria-labelledby="Admissions">
            <a class="dropdown-item {{ ( \Request::url() == url('admission') ) ? 'active' : '' }}" href="/admission">Admission</a>
            <a class="dropdown-item {{ ( \Request::url() == url('tf') ) ? 'active' : '' }}" href="/tf">Tuition and Fees</a>
            <a class="dropdown-item {{ ( \Request::url() == url('schoolapp') ) ? 'active' : '' }}" href="/schoolapp">Application</a>
            <a class="dropdown-item {{ ( \Request::url() == url('etuition') ) ? 'active' : '' }}" href="/etuition">e-tuition</a>
            <a class="dropdown-item {{ ( \Request::url() == url('contactadmission') ) ? 'active' : '' }}" href="/contactadmision">Contact Admissions</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="{{ url('') }}" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Student Life</a>
          <div class="dropdown-menu" aria-labelledby="Student Life">
            <a class="dropdown-item {{ ( \Request::url() == url('services') ) ? 'active' : '' }}" href="/services">Athletics</a>
            <a class="dropdown-item {{ ( \Request::url() == url('asphalt') ) ? 'active' : '' }}" href="/asphalt">Personal Growth</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="{{ url('') }}" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">International Program</a>
          <div class="dropdown-menu" aria-labelledby="International Program">
            <a class="dropdown-item {{ ( \Request::url() == url('intlfeesadmin') ) ? 'active' : '' }}" href="/intlfeesadmin">Fees and Admissions</a>
            <a class="dropdown-item {{ ( \Request::url() == url('academy') ) ? 'active' : '' }}" href="/academy">The Acadmey</a>
            <a class="dropdown-item {{ ( \Request::url() == url('intlservices') ) ? 'active' : '' }}" href="/intlservices">International Services</a>
            <a class="dropdown-item {{ ( \Request::url() == url('ace') ) ? 'active' : '' }}" href="/ace">Accelerated English Camp</a>
            <a class="dropdown-item {{ ( \Request::url() == url('schooladmin') ) ? 'active' : '' }}" href="/intservices">International Services</a>
            <a class="dropdown-item {{ ( \Request::url() == url('schooladmin') ) ? 'active' : '' }}" href="/intservices">International Partners</a>
          </div>
        </li>
        <li class="nav-item {{ ( Request::route()->getName() == 'jobs.index') ? 'active' : '' }}">
          <a class="nav-link" href="/portfolio">Contact Us</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        @guest
          <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
        @else
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="{{ url('') }}" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
            <div class="dropdown-menu" aria-labelledby="Dashboard">
              <a class="dropdown-item" href="/dashboard">Dashboard</a>
              <a class="dropdown-item" href="{{ url('/logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              Logout
            </a>
            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
            </form>
          </div>
        </li>
      @endguest
    </ul>
  </div>
</nav>
</div>
