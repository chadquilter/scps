@extends('layouts.front')

@section('content')
  <div class="container">
    <div class="card">
      <div class="card-header"><h4 class="display-4">{{ __($title) }}</h4></div>
      <div class="card-body alt-color">
        <div class="row">
          <div class="col">
              <h2><u>{{ __('Vision')}}</u></h2>
              <p class="lead">
              {{ __('People of Principle in Places of Prominence')}}
              </p>
              <h2><u>{{ __('Motto')}}</u></h2>
              <p class="lead">
              {{ __('Our mission is to see students transformed through a saving knowledge of Jesus Christ and Bible-based, Christ-centered instruction so they may be thoroughly equipped to fulfill God’s perfect plan for their lives.')}}
              </p>
              <h2><u>{{ __('Methodology')}}</u></h2>
              <p class="lead">
              {{ __('Transforming Lives for the betterment of the future.')}}
              </p>
              <h2><u>{{ __('Charter')}}</u></h2>
              <p class="lead">
              {{ __('SCPS and FCA teaches and trains students in the knowledge of God,  Through Bible-based, Christ-centered instruction, knowledge leads to wisdom, Christ-like character, and service to God in every field of study and every personal endeavor.  The goal of the school is that each individual be thoroughly equipped spiritually, academically, and physically to fulfill God’s perfect plan for his life.')}}
              </p>
              <h2><u>{{ __('Philosophy of Education')}}</u></h2>
              <p class="lead">
              {{ __('Wisdom transforms abstract knowledge into personal belief revealed through strong character.  Thus, true education naturally produces students of spiritual strength and distinction, governed by godly principles in every field of study and in all areas of their life.')}}
              </p>
          </div>
          <div class="col col-md-6">
            @include('inc.sidebarlinks')
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
