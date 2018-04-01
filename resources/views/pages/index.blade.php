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
              {{__('Space City Preparatory School is like no other school in the world, and we have the international reputation and experience to prove it.
              Our comprehensive and challenging academics place us among the top schools in the nation and prepares our students to become tomorrow’s global leaders.
              Our philosophy provides the morals and knowledge for purposeful and peaceful living.')}}
            </p>
            <p class="lead">
              I invite you to spend a few moments to find out more about the programs and people who comprise the SCPS community.
              Better yet, schedule a phone call or a visit so you can personally see, hear, and witness what makes our middle school and high school such a transformative and uplifting place to live, learn, and grow.
            </p>
            <div class="row">
              <div class="col">
                <div class="card">
                  <div class="card-body image_display_r">
                    <div class="row">
                      <div class="col">
                        <h5><small><img src="/images/icon-tour.png" border="0"><br> Take a Tour</small></h5>
                        <br>
                        <h6><small>
                          A beautiful campus, with facilities that enhance the learning environment, support our strong academic program.
                        </small></h6>
                        <br>
                        <h6><small><a href="/tour">View >></a></small></h6>
                      </div>
                      <div class="col">
                        <h5><small><img src="/images/icon-financial-aid.png" border="0"><br> Financial Aid</small></h5>
                        <br>
                        <h6><small>
                          A good education should be available and attainable by all. SCPS has a program fit to prepare all our students.
                        </small></h6>
                        <br>
                        <h6><small><a href="/financial-aid">Learn More >></a></small></h6>
                      </div>
                      <div class="col">
                        <h5><small><img src="/images/icon-academics.png" border="0"><br> Academics</small></h5>
                        <br>
                        <h6><small>
                          An award-winning, internationally recognized program where over 99% of our graduates have gone to college.
                        </small></h6>
                        <br>
                        <h6><small><a href="/departments">Read More >></a></small></h6>
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
                <div class="main-color" style="padding: 18px 20px 0px;">
                  <h1><a href="/admissions/application">
                    <img src="/images/new-course.png" border="0">
                  </a></h1>
                </div>
                <div class="col">
                  <div class="card image_display_r">
                    <div class="card-body">
                      Download your Application to enroll today!
                      <hr class="lead">
                      <button class="btn main-color border border-dark btn-sm text-light" type="button" style="">New Students Application</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col">
                <div class="main-color text-light" style="padding: 18px 20px 0px;">
                  <h1>Today at SCPS</h1>
                </div>
                <div class="col">
                  <div class="card">
                    <div class="card-body">
                      <a href="/admissions/application">
                        <img src="/images/parent-information-night.jpg" border="0">
                      </a>
                      <hr class="lead">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col">
                <div class="main-color text-light" style="padding: 18px 20px 0px;">
                  <h1>Calendar</h1>
                </div>
                <div class="col">
                  <div class="card">
                    <div class="card-body image_display_r">
                      <img src="/images/btn-calendar2.png" border="0">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <br>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col">
            <img src="/images/icon-photo-gallery.png" border="0">
            <h1>Photo Gallery</h1>
            <hr>
          </div>
        </div>
        <div class="row">
          <div class="col">
                <div class="img-container">
                  <img src="/images/gallery_icons/Art-135x110.jpg" alt="Avatar" class="img-image" style="width:100%">
                  <div class="img-middle">
                    <div class="img-text"></div>
                  </div>
                </div>
          </div>
          <div class="col">
            <div class="img-container">
              <img src="/images/gallery_icons/Classrooms-135x110.jpg" alt="Avatar" class="img-image" style="width:100%">
              <div class="img-middle">
                <div class="img-text"></div>
              </div>
            </div>

          </div>
          <div class="col">
                <div class="img-container">
                  <img src="/images/gallery_icons/Electives-135x110.jpg" alt="Avatar" class="img-image" style="width:100%">
                  <div class="img-middle">
                    <div class="img-text"></div>
                  </div>
                </div>

          </div>
          <div class="col">
                <div class="img-container">
                  <img src="/images/gallery_icons/Sports-135x110.jpg" alt="Avatar" class="img-image" style="width:100%">
                  <div class="img-middle">
                    <div class="img-text"></div>
                  </div>
                </div>
          </div>
          <div class="col">
                <div class="img-container">
                  <img src="/images/gallery_icons/Studentlife-135x110.jpg" alt="Avatar" class="img-image" style="width:100%">
                  <div class="img-middle">
                    <div class="img-text"></div>
                  </div>
                </div>

          </div>

        </div>
      </div>
    </div>
  </div>
@endsection
