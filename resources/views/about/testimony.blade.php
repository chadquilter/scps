@extends('layouts.front')

@section('content')
  <div class="container">
    <div class="card">
      <div class="card-header"><h2 class="display-2">{{ __($title) }}</h2></div>
      <div class="card-body alt-color">
        <div class="row">
          <div class="col">
              <h3 class="display-3">“</h3>
              {{ __('...unlike most high schools, SCPS was like a home. Not only because of the circumstances that caused me to see the place as my home physically, but more because of the people, the teachers, the students, even the administration, that made me feel welcomed and loved, a feeling that can only be so real in a family.')}}
              <hr class="style-two">
              <h3 class="display-3">“</h3>
              {{ __('I am grateful for all the support and love that I had during my time there. A few of my favorite teachers and influential people in my life are still at Space City Preparatory! I hope that they continue teaching and influencing the next generation,')}}
              <hr class="style-two">
              <h3 class="display-3">“</h3>
              {{ __('the teachers, the students, even the administration, that made me feel welcomed and loved, a feeling that can only be so real in a family.')}}
              <hr class="style-two">
          </div>
          <div class="col">
            @include('inc.sidebarlinks')
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
