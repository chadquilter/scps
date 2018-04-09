@extends('layouts.front')

@section('content')
  <div class="container">
    <div class="card">
      <div class="card-header shadow_only"><h2 class="display-2">{{ __('International Admission & Fees') }}</h2></div>
      <div class="card-body alt-color">
        <div class="row">
          <div class="col">

              <h1>{{ __('Fees')}}</h1>
              <p class="lead">
              {{ __('2018-2019 International Student Tuition and Fee Schedule The tuition and fee amounts below are payable to SCPS upon receipt of acceptance letter. Except for the I-20 and Administrative fees, all amounts are fully refundable if the student is denied an F-1 visa.')}}
              </p>
              <br>
          <div class="card shadow_onlyl">
            <div class="card-body">
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
            </div>
          </div>

  <div class="row">
  <div class="col-4">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Home</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Profile</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Messages</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings</a>
    </div>
  </div>
  <div class="col-8">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">1</div>
      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">2</div>
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">3</div>
      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">4</div>
    </div>
  </div>
</div>
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
          <div class="col pull-right">
            @include('inc.sidebarlinks')
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
