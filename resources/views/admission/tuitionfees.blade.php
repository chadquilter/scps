@extends('layouts.front')

@section('content')
  <div class="container">
    <div class="card">
      <div class="card-header"><h3 class="display-3">{{ __($title) }}</h3></div>
      <div class="card-body alt-color">
        <div class="row">
          <div class="col">
              <h1 class="display-4">{{ __('Program Fees')}}</h1>
              <p class="lead">
                <ul>
                <li>{{ __('Applicant Testing Fee = $75')}}</li>
                <li>{{ __('Newly Enrolled Student Fee = $400')}}</li>
                <li>{{ __('Registration = $650 (non-refundable)')}}</li>
                <li>{{ __('High School Tuition  =  $14,500 *($12,000 for additional students)')}}</li>
                <li>{{ __('Middle School Tuition = $12,750 *($10,500 for additional students)')}}</li>
                <li>{{ __('Special Discounts:')}}</li>
                <li>{{ __('Early Registration (by February 5, 2018) = $150 off/student')}}</li>
                </ul>
              </p>
              <h1>{{ __('Special Courses:')}}</h1>
              <p class="lead">
              {{ __('There is a $250 per course fee for all Advanced Placement classes. Students may also be responsible for other costs related to certain course activities (e.g. lab materials, field trips) or the purchase of specific materials or equipment (e.g. lab goggles and lab coats, online licenses). Students are provided class information to purchase/provide for their own textbooks and class materials.  The Parent-Teacher Fellowship sponsors a used textbook sale to help families buy and sell their used textbooks.')}}
              </p>
              <h1>{{ __('International Students:')}}</h1>
              <p class="lead">
              {{ __('SCPA is authorized by the United States government to issue the I-20 form necessary to obtain international student visas. Please see our separate literature for specific information and costs for enrolling in our international programs.')}}
              </p>
              <h1 class="display-4">{{ __('Participation Fees')}}</h1>
              <h1>{{ __('Class Trips:')}}</h1>
              <p class="lead">
              {{ __('Students participate in educational trips during the school year. Details for each trip are provided early in the school year so students can plan and fundraise for these award-winning experiences.')}}
              </p>
              <h1>{{ __('Interscholastic Sports:')}}</h1>
              <p class="lead">
              {{ __('Students selected to participate on an interscholastic sports team are required to pay a per season fee to defray some of the cost for participation, transportation, coach salaries, and league expenses. Students must submit a recent medical clearance and complete all required paperwork in advance. Please refer to the Sports Participation Manual for more details.')}}
              </p>
              <h1>{{ __('Special Activities:')}}</h1>
              <p class="lead">
              {{ __('Participation in certain groups, activities, and competitions may require students to pay for travel (including overnight travel) to events, competitions, team uniforms or performance wardrobe, and other expenses. The cost for participation and the schedule of events is made available in advance and students and parents must commit to meeting their obligations before being allowed to join.')}}
              </p>
              <h1>{{ __('Other Services:')}}</h1>
              <p class="lead">
              {{ __('Space City Preparatory has a Food Service, Transportation Service, and After School Tutoring Service. There are also special classes and enrichment opportunities throughout the year. Please refer to our specific literature for more information about each program.')}}
              </p>
              <h1 class="display-1">{{ __('Financial Policies')}}</h1>
              <h1>{{ __('Refunds:')}}</h1>
              <p class="lead">
              {{ __('School fees (e.g. testing, registration, etc.) are non-refundable. Refunds on items not received or used are subject to the policies of the publisher, manufacturer, or supplier.')}}
              </p>
              <h1>{{ __('Cancellations:')}}</h1>
              <p class="lead">
              {{ __('Cancellation of annual services (e.g. tuition, transportation, tutoring, etc.) is subject to a 10% charge based on the annual amount. After the first semester, tuition will not be pro-rated or refunded for the remainder of the year even if the student withdraws.')}}
              </p>
              <h1>{{ __('Schedule:')}}</h1>
              <p class="lead">
              {{ __('First installments are due June 15, 2018, then on the 1st of every month from September 1, 2018, through May 1, 2019. Additional monthly statements may be issued for your convenience.')}}
              </p>
              <h1>{{ __('Unpaid Balances:')}}</h1>
              <p class="lead">
              {{ __('Payments are considered overdue after the 5th of each month at which time a minimum late fee of $30/month or 1.5% of the outstanding balance will be charged. Families will be charged $30 for each occurrence of a returned check plus any bank charges incurred by the school. Families with severely delinquent accounts will not be allowed to re-enroll and may be refused attendance until the balance is settled. Please contact the school office before letting your account balance become a problem.')}}
              </p>
              <h1 class="display-4">{{ __('What’s New for 2018 – 2019')}}</h1>

                <ul>
                  <li>
                    <h1>{{ __('Campus Renovations:')}}</h1>
                      <p class="lead">
                        {{ __('We will soon complete our first round of upgrades to our Hayward campus facilities, including 1) completion of the large science research lab, 2) renovation of the multi-Purpose Room, and 3) technology equipment upgrades in many of the classrooms.')}}
                      </p>
                  </li>
                  <li>
                    <h1>{{ __('New Facilities:')}}</h1>
                      <p class="lead">
                        {{ __('We are beginning the financing and planning stages to construct a gymnasium, fitness center, recreation room, and event center, along with a student residence hall with study, recreation, fellowship , and meeting rooms.  We hope these projects will formally start the 18-19 school year and be partially ready for the 2019-2020 school year.')}}
                      </p>
                  </li>
                </ul>

              <br>
              <div class="alert alert-danger">
                <h1>Statement of Non-Discrimination</h1>
                <p class="lead">
                  {{ __('Space City Preparatory admits students of any race, color, religion, national and ethnic origin to all the rights, privileges, programs, and activities generally accorded or made available to students at the school.  It does not discriminate on the basis of race, color, religion, national and ethnic origin in administration of its educational policies, admissions policies, scholarship and loan programs, and athletic and other school-administered programs.')}}
                </p>
              </div>
          </div>
          <div class="col">
            @include('inc.sidebarlinks')
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
