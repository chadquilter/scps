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

            </div>
          </div>

          <div class="row">
            <div class="col-4">
              <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action active" id="fee-list-1" data-toggle="list" href="#fee-1" role="tab" aria-controls="1">{{ __('NON-REFUNDABLE APPLICATION FEE: $600.00 USD')}}</a>
                <a class="list-group-item list-group-item-action" id="fee-list-2" data-toggle="list" href="#fee-2" role="tab" aria-controls="2">{{ __('GRADUATION FEES: $250.00 USD')}}</a>
                <a class="list-group-item list-group-item-action" id="fee-list-3" data-toggle="list" href="#fee-3" role="tab" aria-controls="3">{{ __('TUITION AND FEES $15,000 USD')}}</a>
                <a class="list-group-item list-group-item-action" id="fee-list-4" data-toggle="list" href="#fee-4" role="tab" aria-controls="3">{{ __('ACADEMIC PROGRAM REQUIREMENTS: $850.00 USD')}}</a>
                <a class="list-group-item list-group-item-action" id="fee-list-5" data-toggle="list" href="#fee-5" role="tab" aria-controls="5">{{ __('ACADEMY LANGUAGE PROGRAM (IF REQUIRED) $2000.00 USD')}}</a>
                <a class="list-group-item list-group-item-action" id="fee-list-6" data-toggle="list" href="#fee-6" role="tab" aria-controls="6">{{ __('HOST FAMILY RESIDENCE FEE: $8000.00 USD')}}</a>
              </div>
            </div>
            <div class="col-8">
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="list-1" role="tabpanel" aria-labelledby="fee-list-1">
                  <p class="lead">
                  {{ __('Includes I-20.  You will take the I-20 to the embassy to get your visa.')}}
                  </p>
                </div>
                <div class="tab-pane fade" id="list-2" role="tabpanel" aria-labelledby="fee-list-2">
                  <p class="lead">
                  {{ __('For senior year only')}}
                  </p>
                </div>
                <div class="tab-pane fade" id="list-3" role="tabpanel" aria-labelledby="fee-list-3">
                  <p class="lead">
                  {{ __('Tuition, Medical Insurance, textbookslab fees, field trips, etc.')}}
                  </p>
                </div>
                <div class="tab-pane fade" id="list-4" role="tabpanel" aria-labelledby="fee-list-4">
                  <p class="lead">
                  {{ __('Spantran evaluation of credits, foreign language testing, health insurance,etc.')}}
                  </p>
                  <p class="lead">
                    {{ __('(Since roster spots are limited, international students must enroll for the entire year and there is no refund for early withdrawals or transfer.)')}}
                  </p>
                </div>
                <div class="tab-pane fade" id="list-5" role="tabpanel" aria-labelledby="fee-list-5">
                  <p class="lead">
                  {{ __('Special instructional program to develop English proficiency while continuing academic instruction in core subjects. Extra tutorials, remediation, etc.')}}
                  </p>
                </div>
                <div class="tab-pane fade" id="list-6" role="tabpanel" aria-labelledby="fee-list-6">
                  <p class="lead">
                  {{ __('Includes Room, Board, School Lunch, Transportation, and Support')}}
                  </p>
                </div>
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
