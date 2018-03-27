@extends('layouts.front')

@section('content')
  <div class="container">
    <div class="card alt-color">
      <div class='card-img-top alt-color'>
        @include('inc.jobimagecarosel')
      </div>
      <div class="card-img-caption">

      </div>
      <div class="card-body alt-color">

          <div class="row">
            <div class="col">
              <h1 class="display-4">Values and Excellence</h1>
              <p class="lead">
                Space City Preparatory School is like no other school in the world, and we have the international reputation and experience to prove it.
                Our comprehensive and challenging academics place us among the top schools in the nation and prepares our students to become tomorrow’s global leaders.
                Our philosophy provides the morals and knowledge for purposeful and peaceful living.
              </p>
              <p class="lead">
                I invite you to spend a few moments to find out more about the programs and people who comprise the SCPS community.
                Better yet, schedule a phone call or a visit so you can personally see, hear, and witness what makes our middle school and high school such a transformative and uplifting place to live, learn, and grow.
              </p>
            </div>
            <div class="col">
              <div class="row">
                <div class="col">
                  <a href="/admissions/application">
                    <img src="/images/new-course.png" border="0" style="visibility: visible; opacity: 1;">
                  </a>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <button class="btn main-color border border-dark btn-sm text-light" type="button" style="">New Students Application</button>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <button class="btn main-color border border-dark btn-sm text-light" type="button" style="">New Students Application</button>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
