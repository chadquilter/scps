
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
        <a class="nav-link" href="https://spacecityschool.org/">{{__('Home')}}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://spacecityschool.org/about-us/">{{__('About Us')}}</a>
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
    <div class="col col-sm-10">
      <div class="row">
        <div class="col">
          <h1 class="display-4" style="text-align: left; color: #FAEBD7; text-shadow: 2px 2px 4px #000000;">{{__('Space City Preparatory School')}}</h1>
          <h5 style="text-align: left; color: #FAEBD7; text-shadow: 2px 2px 4px #000000; font-style: oblique;">{{__('~ Educating The World.')}}</h5>
        </div>
        <!-- Split dropup button -->
        <div class="col col-auto float-sm-right">
          <button class="btn btn-secondary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            English
          </button>
          <div class="dropdown-menu">
            <form class="" action="{{url('/locale')}}" method="post">
              <select class="" name="locale" onchange="this.form.submit()">
                <option class="dropdown-item" value="en" >English</option>
                <option class="dropdown-item" value="zh" >简体中文 Chinese (Simplified)</option>
              </select>
            </form>
          </div>

          <div class="links">
              <a href="locale/en">English</a>
              <a href="locale/zh">简体中文 Chinese (Simplified)</a>
              <a href="locale">@lang('index.check')</a>
          </div>

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
          <a class="nav-link" href="/">{{__('Home')}}</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="{{ url('') }}" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{__('About Us')}}</a>
          <div class="dropdown-menu" aria-labelledby="{{__('About Us')}}">
            <a class="dropdown-item {{ ( \Request::url() == url('sh') ) ? 'active' : '' }}" href="/ac">{{__('School History')}}</a>
            <a class="dropdown-item {{ ( \Request::url() == url('schedule') ) ? 'active' : '' }}" href="/schedule">{{__('Vision')}}</a>
            <a class="dropdown-item {{ ( \Request::url() == url('departments') ) ? 'active' : '' }}" href="/elec">{{__('Core Values')}}</a>
            <a class="dropdown-item {{ ( \Request::url() == url('ps') ) ? 'active' : '' }}" href="/concrete">{{__('ESLRs')}}</a>
            <a class="dropdown-item {{ ( \Request::url() == url('schooladmin') ) ? 'active' : '' }}" href="/homes">{{__('Testimonials')}}</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="{{ url('') }}" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{__('Academics')}}</a>
          <div class="dropdown-menu" aria-labelledby="Academics">
            <a class="dropdown-item {{ ( \Request::url() == url('ac') ) ? 'active' : '' }}" href="/ac">{{__('Academic Calendar')}}</a>
            <a class="dropdown-item {{ ( \Request::url() == url('schedule') ) ? 'active' : '' }}" href="/schedule">{{__('Daily Schedule')}}</a>
            <a class="dropdown-item {{ ( \Request::url() == url('departments') ) ? 'active' : '' }}" href="/departments">{{__('Departments')}}</a>
            <a class="dropdown-item {{ ( \Request::url() == url('ps') ) ? 'active' : '' }}" href="/concrete">{{__('PowerSchool')}}</a>
            <a class="dropdown-item {{ ( \Request::url() == url('schooladmin') ) ? 'active' : '' }}" href="/homes">{{__('Administration')}}</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="{{ url('') }}" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{__('Admissions')}}</a>
          <div class="dropdown-menu" aria-labelledby="Admissions">
            <a class="dropdown-item {{ ( \Request::url() == url('admission') ) ? 'active' : '' }}" href="/admission">{{__('Admission')}}</a>
            <a class="dropdown-item {{ ( \Request::url() == url('tf') ) ? 'active' : '' }}" href="/tf">{{__('Tuition and Fees')}}</a>
            <a class="dropdown-item {{ ( \Request::url() == url('schoolapp') ) ? 'active' : '' }}" href="/schoolapp">{{__('Application')}}</a>
            <a class="dropdown-item {{ ( \Request::url() == url('etuition') ) ? 'active' : '' }}" href="/etuition">{{__('e-tuition')}}</a>
            <a class="dropdown-item {{ ( \Request::url() == url('contactadmission') ) ? 'active' : '' }}" href="/contactadmision">{{__('Contact Admissions')}}</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="{{ url('') }}" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{__('Student Life')}}</a>
          <div class="dropdown-menu" aria-labelledby="Student Life">
            <a class="dropdown-item {{ ( \Request::url() == url('services') ) ? 'active' : '' }}" href="/services">{{__('Athletics')}}</a>
            <a class="dropdown-item {{ ( \Request::url() == url('asphalt') ) ? 'active' : '' }}" href="/asphalt">{{__('Personal Growth')}}</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="{{ url('') }}" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{__('International Program')}}</a>
          <div class="dropdown-menu" aria-labelledby="International Program">
            <a class="dropdown-item {{ ( \Request::url() == url('intlfeesadmin') ) ? 'active' : '' }}" href="/intlfeesadmin">{{__('Fees and Admissions')}}</a>
            <a class="dropdown-item {{ ( \Request::url() == url('academy') ) ? 'active' : '' }}" href="/academy">{{__('The Acadmey')}}</a>
            <a class="dropdown-item {{ ( \Request::url() == url('intlservices') ) ? 'active' : '' }}" href="/intlservices">{{__('International Services')}}</a>
            <a class="dropdown-item {{ ( \Request::url() == url('ace') ) ? 'active' : '' }}" href="/ace">{{__('Accelerated English Camp')}}</a>
            <a class="dropdown-item {{ ( \Request::url() == url('schooladmin') ) ? 'active' : '' }}" href="/intservices">{{__('International Services')}}</a>
            <a class="dropdown-item {{ ( \Request::url() == url('schooladmin') ) ? 'active' : '' }}" href="/intservices">{{__('International Partners')}}</a>
          </div>
        </li>
        <li class="nav-item {{ ( Request::route()->getName() == 'jobs.index') ? 'active' : '' }}">
          <a class="nav-link" href="/portfolio">{{__('Contact Us')}}</a>
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
