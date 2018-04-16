
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
        <a class="nav-link" href="/">{{__('Home')}}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/about-us">{{__('About-Us')}}</a>
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
      <a href="/"><img alt="{{ config('app.name', 'Space City Preparatory') }}" src="/images/scps_logo.png" height="140"></a>
    </div>
    <div class="col col-sm-10">
      <div class="row">
        <div class="col">
          <h1 class="display-4" style="text-align: left; color: #FAEBD7; text-shadow: .5rem .5rem 1rem #000000;">{{__('Space City Preparatory School')}}</h1>
          <h5 style="text-align: left; color: #FAEBD7; text-shadow: .5rem .5rem 1rem #000000; font-style: oblique;">{{__('~ Educating The World.')}}</h5>
        </div>
        <!-- Split dropup button -->
        <div class="col col-auto float-sm-right">
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle btn-sm" type="button" data-toggle="dropdown">Select Langauge:
            <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a href="/locale/en">English</a></li>
              <li><a href="/locale/zh">简体中文 Chinese (Simplified)</a></li>
            </ul>
          </div>
          <form id="contact_form" action={{ url('/search-scps')  }} method="POST" enctype="multipart/form-data">
            @csrf
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
            <a class="dropdown-item {{ ( \Request::url() == url('school-history') ) ? 'active' : '' }}" href="/about-us/school-history">{{__('School History')}}</a>
            <a class="dropdown-item {{ ( \Request::url() == url('vision') ) ? 'active' : '' }}" href="/about-us/vision">{{__('Vision')}}</a>
            <a class="dropdown-item {{ ( \Request::url() == url('core-values') ) ? 'active' : '' }}" href="/about-us/core-values">{{__('Core Values')}}</a>
            <a class="dropdown-item {{ ( \Request::url() == url('testimony') ) ? 'active' : '' }}" href="/about-us/testimony">{{__('Testimonials')}}</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="{{ url('') }}" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{__('Academics')}}</a>
          <div class="dropdown-menu" aria-labelledby="Academics">
            <a class="dropdown-item {{ ( \Request::url() == url('academic-calendar') ) ? 'active' : '' }}" href="/academic/academic-calendar">{{__('Academic Calendar')}}</a>
            <a class="dropdown-item {{ ( \Request::url() == url('academic-schedule') ) ? 'active' : '' }}" href="/academic/academic-schedule">{{__('Daily Schedule')}}</a>
            <a class="dropdown-item {{ ( \Request::url() == url('departments') ) ? 'active' : '' }}" href="/academic/departments">{{__('Departments')}}</a>
            <a class="dropdown-item {{ ( \Request::url() == url('powerschool') ) ? 'active' : '' }}" href="/academic/powerschool">{{__('PowerSchool')}}</a>
            <a class="dropdown-item {{ ( \Request::url() == url('administration') ) ? 'active' : '' }}" href="/academic/administration">{{__('Administration')}}</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="{{ url('') }}" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{__('Admissions')}}</a>
          <div class="dropdown-menu" aria-labelledby="Admissions">
            <a class="dropdown-item {{ ( \Request::url() == url('admissions') ) ? 'active' : '' }}" href="/admission/admissions">{{__('Admission')}}</a>
            <a class="dropdown-item {{ ( \Request::url() == url('tuition-fees') ) ? 'active' : '' }}" href="/admission/tuition-fees">{{__('Tuition and Fees')}}</a>
            <a class="dropdown-item {{ ( \Request::url() == url('application') ) ? 'active' : '' }}" href="/admission/application">{{__('Application')}}</a>
            <a class="dropdown-item {{ ( \Request::url() == url('e-tuition') ) ? 'active' : '' }}" href="/admission/e-tuition">{{__('e-tuition')}}</a>
            <a class="dropdown-item {{ ( \Request::url() == url('admission-contact') ) ? 'active' : '' }}" href="/admission/admission-contact">{{__('Contact Admissions')}}</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="{{ url('') }}" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{__('Student Life')}}</a>
          <div class="dropdown-menu" aria-labelledby="Student Life">
            <a class="dropdown-item {{ ( \Request::url() == url('athletics') ) ? 'active' : '' }}" href="/student-life/athletics">{{__('Athletics')}}</a>
            <a class="dropdown-item {{ ( \Request::url() == url('growth') ) ? 'active' : '' }}" href="/student-life/growth">{{__('Personal Growth')}}</a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="{{ url('') }}" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{__('International Program')}}</a>
          <div class="dropdown-menu" aria-labelledby="International Program">
            <a class="dropdown-item {{ ( \Request::url() == url('international-school/international-admission') ) ? 'active' : '' }}" href="/international-school/international-admission">{{__('Fees and Admissions')}}</a>
            <a class="dropdown-item {{ ( \Request::url() == url('international-school/international-academy') ) ? 'active' : '' }}" href="/international-school/international-academy">{{__('The Acadmey')}}</a>
            <a class="dropdown-item {{ ( \Request::url() == url('international-school/international-services') ) ? 'active' : '' }}" href="/international-school/international-services">{{__('International Services')}}</a>
            <a class="dropdown-item {{ ( \Request::url() == url('international-school/accelerated-english') ) ? 'active' : '' }}" href="/international-school/accelerated-english">{{__('Accelerated English Camp')}}</a>
            <a class="dropdown-item {{ ( \Request::url() == url('international-school/international-partners') ) ? 'active' : '' }}" href="/international-school/international-partners">{{__('International Partners')}}</a>
          </div>
        </li>
        <li class="nav-item {{ ( Request::route()->getName() == 'contact.index') ? 'active' : '' }}">
          <a class="nav-link" href="/contact-us">{{__('Contact')}}</a>
        </li>
      </ul>

  </div>
</nav>
</div>
