@extends('layouts.front')

@section('content')
  <div class="container">
    <div class="card">
      <div class="card-header"><h2 class="display-2">{{ __('Core Values') }}</h2></div>
      <div class="card-body alt-color">
        <div class="row">
          <div class="col">
              <h1>{{ __('Fees')}}</h1>
              <p class="lead">
              {{ __('2018-2019 International Student Tuition and Fee Schedule The tuition and fee amounts below are payable to SCPS upon receipt of acceptance letter. Except for the I-20 and Administrative fees, all amounts are fully refundable if the student is denied an F-1 visa.')}}
              </p>
              <h1>{{ __('NON-REFUNDABLE APPLICATION FEE: $600.00 USD')}}</h1>
              <p class="lead">
              {{ __('Includes I-20.  You will take the I-20 to the embassy to get your visa.')}}
              </p>
              <h1>{{ __('GRADUATION FEES: $250.00 USD')}}</h1>
              <p class="lead">
              {{ __('For senior year only')}}
              </p>
              <h1>{{ __('TUITION AND FEES $15,000 USD')}}</h1>
              <p class="lead">
              {{ __('Tuition, Medical Insurance, textbookslab fees, field trips, etc.')}}
              </p>
              <h1>{{ __('ACADEMIC PROGRAM REQUIREMENTS: $850.00 USD')}}</h1>
              <p class="lead">
              {{ __('Spantran evaluation of credits, foreign language testing, health insurance,etc.')}}
              </p>
              <p class="lead">
                {{ __('(Since roster spots are limited, international students must enroll for the entire year and there is no refund for early withdrawals or transfer.)')}}
              </p>
              <h1>{{ __('ACADEMY LANGUAGE PROGRAM (IF REQUIRED) $2000.00 USD')}}</h1>
              <p class="lead">
              {{ __('Special instructional program to develop English proficiency while continuing academic instruction in core subjects. Extra tutorials, remediation, etc.')}}
              </p>
              <h1>{{ __('HOST FAMILY RESIDENCE FEE: $8000.00 USD')}}</h1>
              <p class="lead">
              {{ __('Includes Room, Board, School Lunch, Transportation, and Support')}}
              </p>
              <h1>{{ __('Forms and Applications')}}</h1>
              <p class="lead">
              {{ __('All forms regarding International students may be found below in PDF format.')}}
              </p>
              <ul class="nav nav-pills nav-fill main-color">
                <li class="nav-item">
                  <a class="nav-link active" href="/aplication">{{ __('Domestic Students Application')}}</a>
                </li>
              </ul>
              <br>
              <ul class="nav nav-pills nav-fill main-color">
                <li class="nav-item">
                  <a class="nav-link active" href="/aplication">{{ __('International Students Application')}}</a>
                </li>
              </ul>
          </div>
          <div class="col">
            @include('inc.sidebarlinks')
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
