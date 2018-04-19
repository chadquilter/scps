@extends('layouts.front')

@section('content')
  <div class="container">
    <div class="card">
      <div class="card-header"><h4 class="display-4">{{ __($title) }}</h4></div>
      <div class="card-body alt-color">
        <div class="row">
          <div class="col">
              <h1>{{ __('Student Life!')}}</h1>
              <hr class="style-two">
              <p class="lead">
              {{ __('Middle school and high school clubs allow our students to find their passion outside of the classroom. A broad range of clubs and organizations allow each student to explore areas of interest, exercise leadership skills, and develop meaningful relationships with students who have similar interests. We encourage students to start new clubs, or step out of their comfort zones and join an established club they may not have considered in the past. At the beginning of each school year we hold a “Club Fair” where all of our clubs are on display, officers are manning tables, and literature is distributed to provide exposure to all of the groups. Our goal is that each student will find a place outside of the classroom to grow, create, and develop.')}}
              </p>
          </div>
          <div class="col col-md-6 col-lg-4">
            @include('inc.sidebarlinks')
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
