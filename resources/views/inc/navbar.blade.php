
<div class="container">
<nav class="navbar navbar-expand-md navbar-dark" style="background-color: none;">
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
              <img src="https://crosspointacademy.org/wp-content/uploads/2013/06/icon-phone.png" class="top-navigation-right-icon" alt=""/>
              (510) 995-5333
            </a>
          </li>
      </ul>
</nav>
<br>
<div>
  <div class="row">
    <div class="col col-2">
      <img alt="{{ config('app.name', 'Space City Preparatory') }}" src="/images/scps_logo.png" height="140">
    </div>
    <div class="col col-8">
      <h1 style="text-align: left; color: white; text-shadow: 2px 2px 4px #000000;">{{ config('app.name', 'Space City Preparatory') }}</h1>
    </div>
    <div class="col col-4">
      <!-- Split dropup button -->

      <button type="button" class="btn btn-secondary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="sr-only">English</span>
      </button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">English</a>
        <a class="dropdown-item" href="#">简体中文 Chinese (Simplified)</a>
      </div>
      <br>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </div>
</div>
<br>

<nav class="navbar navbar-expand-md navbar-dark border border-dark" style="background-color: #9f1b32;">
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
        <a class="nav-link dropdown-toggle" href="{{ url('') }}" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About Us</a>
        <div class="dropdown-menu" aria-labelledby="About Us">
          <a class="dropdown-item {{ ( \Request::url() == url('excavation') ) ? 'active' : '' }}" href="/excavation">Excavation</a>
          <a class="dropdown-item {{ ( \Request::url() == url('groundupconstruction') ) ? 'active' : '' }}" href="/groundupconstruction">Ground Up Construction</a>
          <a class="dropdown-item {{ ( \Request::url() == url('finishout') ) ? 'active' : '' }}" href="/finishout">Interior Finish Out</a>
          <a class="dropdown-item {{ ( \Request::url() == url('steel') ) ? 'active' : '' }}" href="/steel">Structural Steel</a>
          <hr class="my-4">
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="{{ url('') }}" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Academics</a>
        <div class="dropdown-menu" aria-labelledby="Academics">
          <a class="dropdown-item {{ ( \Request::url() == url('services') ) ? 'active' : '' }}" href="/services">Services Overview</a>
          <a class="dropdown-item {{ ( \Request::url() == url('asphalt') ) ? 'active' : '' }}" href="/asphalt">Concrete and Asphalt</a>
          <a class="dropdown-item {{ ( \Request::url() == url('cm') ) ? 'active' : '' }}" href="/cm">Construction Management</a>
          <a class="dropdown-item {{ ( \Request::url() == url('concrete') ) ? 'active' : '' }}" href="/concrete">Custom Concrete</a>
          <a class="dropdown-item {{ ( \Request::url() == url('homes') ) ? 'active' : '' }}" href="/homes">Custom Homes</a>
          <a class="dropdown-item {{ ( \Request::url() == url('kitchenbath') ) ? 'active' : '' }}" href="/kitchenbath">Custom Kitchen and Bath</a>
          <a class="dropdown-item {{ ( \Request::url() == url('demolition') ) ? 'active' : '' }}" href="/demolition">Demolition</a>
          <a class="dropdown-item {{ ( \Request::url() == url('excavation') ) ? 'active' : '' }}" href="/excavation">Excavation</a>
          <a class="dropdown-item {{ ( \Request::url() == url('groundupconstruction') ) ? 'active' : '' }}" href="/groundupconstruction">Ground Up Construction</a>
          <a class="dropdown-item {{ ( \Request::url() == url('finishout') ) ? 'active' : '' }}" href="/finishout">Interior Finish Out</a>
          <a class="dropdown-item {{ ( \Request::url() == url('steel') ) ? 'active' : '' }}" href="/steel">Structural Steel</a>
					<hr class="my-4">
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="{{ url('') }}" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admissions</a>
        <div class="dropdown-menu" aria-labelledby="Admissions">
          <a class="dropdown-item {{ ( \Request::url() == url('services') ) ? 'active' : '' }}" href="/services">Services Overview</a>
          <a class="dropdown-item {{ ( \Request::url() == url('asphalt') ) ? 'active' : '' }}" href="/asphalt">Concrete and Asphalt</a>
          <a class="dropdown-item {{ ( \Request::url() == url('cm') ) ? 'active' : '' }}" href="/cm">Construction Management</a>
          <a class="dropdown-item {{ ( \Request::url() == url('concrete') ) ? 'active' : '' }}" href="/concrete">Custom Concrete</a>
          <a class="dropdown-item {{ ( \Request::url() == url('homes') ) ? 'active' : '' }}" href="/homes">Custom Homes</a>
          <a class="dropdown-item {{ ( \Request::url() == url('kitchenbath') ) ? 'active' : '' }}" href="/kitchenbath">Custom Kitchen and Bath</a>
          <a class="dropdown-item {{ ( \Request::url() == url('demolition') ) ? 'active' : '' }}" href="/demolition">Demolition</a>
          <a class="dropdown-item {{ ( \Request::url() == url('excavation') ) ? 'active' : '' }}" href="/excavation">Excavation</a>
          <a class="dropdown-item {{ ( \Request::url() == url('groundupconstruction') ) ? 'active' : '' }}" href="/groundupconstruction">Ground Up Construction</a>
          <a class="dropdown-item {{ ( \Request::url() == url('finishout') ) ? 'active' : '' }}" href="/finishout">Interior Finish Out</a>
          <a class="dropdown-item {{ ( \Request::url() == url('steel') ) ? 'active' : '' }}" href="/steel">Structural Steel</a>
          <hr class="my-4">
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="{{ url('') }}" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Student Life</a>
        <div class="dropdown-menu" aria-labelledby="Student Life">
          <a class="dropdown-item {{ ( \Request::url() == url('services') ) ? 'active' : '' }}" href="/services">Services Overview</a>
          <a class="dropdown-item {{ ( \Request::url() == url('asphalt') ) ? 'active' : '' }}" href="/asphalt">Concrete and Asphalt</a>
          <a class="dropdown-item {{ ( \Request::url() == url('cm') ) ? 'active' : '' }}" href="/cm">Construction Management</a>
          <a class="dropdown-item {{ ( \Request::url() == url('concrete') ) ? 'active' : '' }}" href="/concrete">Custom Concrete</a>
          <a class="dropdown-item {{ ( \Request::url() == url('homes') ) ? 'active' : '' }}" href="/homes">Custom Homes</a>
          <a class="dropdown-item {{ ( \Request::url() == url('kitchenbath') ) ? 'active' : '' }}" href="/kitchenbath">Custom Kitchen and Bath</a>
          <a class="dropdown-item {{ ( \Request::url() == url('demolition') ) ? 'active' : '' }}" href="/demolition">Demolition</a>
          <a class="dropdown-item {{ ( \Request::url() == url('excavation') ) ? 'active' : '' }}" href="/excavation">Excavation</a>
          <a class="dropdown-item {{ ( \Request::url() == url('groundupconstruction') ) ? 'active' : '' }}" href="/groundupconstruction">Ground Up Construction</a>
          <a class="dropdown-item {{ ( \Request::url() == url('finishout') ) ? 'active' : '' }}" href="/finishout">Interior Finish Out</a>
          <a class="dropdown-item {{ ( \Request::url() == url('steel') ) ? 'active' : '' }}" href="/steel">Structural Steel</a>
          <hr class="my-4">
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="{{ url('') }}" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">International Program</a>
        <div class="dropdown-menu" aria-labelledby="International Program">
          <a class="dropdown-item {{ ( \Request::url() == url('services') ) ? 'active' : '' }}" href="/services">Services Overview</a>
          <a class="dropdown-item {{ ( \Request::url() == url('asphalt') ) ? 'active' : '' }}" href="/asphalt">Concrete and Asphalt</a>
          <a class="dropdown-item {{ ( \Request::url() == url('cm') ) ? 'active' : '' }}" href="/cm">Construction Management</a>
          <a class="dropdown-item {{ ( \Request::url() == url('concrete') ) ? 'active' : '' }}" href="/concrete">Custom Concrete</a>
          <a class="dropdown-item {{ ( \Request::url() == url('homes') ) ? 'active' : '' }}" href="/homes">Custom Homes</a>
          <a class="dropdown-item {{ ( \Request::url() == url('kitchenbath') ) ? 'active' : '' }}" href="/kitchenbath">Custom Kitchen and Bath</a>
          <a class="dropdown-item {{ ( \Request::url() == url('demolition') ) ? 'active' : '' }}" href="/demolition">Demolition</a>
          <a class="dropdown-item {{ ( \Request::url() == url('excavation') ) ? 'active' : '' }}" href="/excavation">Excavation</a>
          <a class="dropdown-item {{ ( \Request::url() == url('groundupconstruction') ) ? 'active' : '' }}" href="/groundupconstruction">Ground Up Construction</a>
          <a class="dropdown-item {{ ( \Request::url() == url('finishout') ) ? 'active' : '' }}" href="/finishout">Interior Finish Out</a>
          <a class="dropdown-item {{ ( \Request::url() == url('steel') ) ? 'active' : '' }}" href="/steel">Structural Steel</a>
          <hr class="my-4">
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
