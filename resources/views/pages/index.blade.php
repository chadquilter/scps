@extends('layouts.front')

@section('content')
  <div class="container">
    <div class="card alt-color">
      <div class='card-img-top alt-color'>
        @include('inc.jobimagecarosel')
      </div>
      <div class="card-body alt-color">

        <div class="row">
          <div class="col">
            <h1 class="display-4">{{__('Values and Excellence')}}</h1>
            <p class="lead">
              {{__('Space City Preparatory School is like no other school in the world, and we have the international reputation and experience to prove it. Our comprehensive and challenging academics place us among the top schools in the nation and prepares our students to become tomorrow’s global leaders. Our philosophy provides the morals and knowledge for purposeful and peaceful living.')}}
            </p>
            <p class="lead">
              {{__('I invite you to spend a few moments to find out more about the programs and people who comprise the SCPS community. Better yet, schedule a phone call or a visit so you can personally see, hear, and witness what makes our middle school and high school such a transformative and uplifting place to live, learn, and grow.')}}
            </p>
            <div class="row">
              <div class="col">
                <div class="card">
                  <div class="card-body image_display_r">
                    <div class="row">
                      <div class="col">
                        <h5><small><img src="/images/icon-tour.png" border="0"><br>{{__('Take a Tour')}}</small></h5>
                        <br>
                        <h6><small>
                          {{__('A beautiful campus, with facilities that enhance the learning environment, support our strong academic program.')}}
                        </small></h6>
                        <br>
                        <h6><small><a href="/gallery/classroom-gallery">{{__('View >>')}}</a></small></h6>
                      </div>
                      <div class="col">
                        <h5><small><img src="/images/icon-financial-aid.png" border="0"><br>{{__('Financial Aid')}}</small></h5>
                        <br>
                        <h6><small>
                          {{__('A good education should be available and attainable by all. SCPS has a program fit to prepare all our students.')}}
                        </small></h6>
                        <br>
                        <h6><small><a href="/admission/tuition-fees">{{__('Learn More >>')}}</a></small></h6>
                      </div>
                      <div class="col">
                        <h5><small><img src="/images/icon-academics.png" border="0"><br>{{__('Academics')}}</small></h5>
                        <br>
                        <h6><small>
                          {{__('An award-winning, internationally recognized program where over 99% of our graduates have gone to college.')}}
                        </small></h6>
                        <br>
                        <h6><small><a href="/academic/departments">{{__('Read More >>')}}</a></small></h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="row">
              <div class="col">
                <div class="main-color text-light sidebar_pad">
                  <h1>
                    <div class="row">
                      <div class="col col-sm-2">
                        <img src="/images/new-course.png" border="0">
                      </div>
                      <div class="col">
                        <h6>{{ __('New Students')}}</h6>
                        <h1>{{ __('Application')}}</h1>
                      </div>
                    </div>
                  </h1>
                </div>
                <div class="col">
                  <div class="card image_display_r">
                    <div class="card-body">
                      {{__('Download your Application to enroll today!')}}
                      <hr class="lead">
                      <button class="btn main-color border border-dark btn-sm text-light" type="button" style="">{{__('New Students Application')}}</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col">
                <div class="main-color text-light sidebar_pad">
                  <h1>{{__('Today at SCPS')}}</h1>
                </div>
                <div class="col">
                  <div class="card">
                    <div class="card-body">
                      <a href="/admissions/application">
                        <img src="/images/parent-information-night.jpg" border="0">
                      </a>
                      <div class="alert alert-info shadow_only">
                        <center>
                          <h1 class="text-success"><strong>Parent</strong></h1>
                          <div class="bg-warning text-light"><h1>Info</h1></div>
                          <h1 class="text-success"><strong>Night</strong></h1>
                        </center>
                      </div>
                      <hr>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <br>
            @include('inc.sidecalendar')
            <br>
          </div>
        </div>
        <br>
        @include('inc.photothumb')
      </div>
    </div>
  </div>
@endsection
