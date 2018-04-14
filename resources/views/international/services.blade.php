@extends('layouts.front')

@section('content')
  <div class="container">
    <div class="card">
      <div class="card-header"><h4 class="display-4">{{ __($title) }}</h4></div>
      <div class="card-body alt-color">
        <div class="row">
          <div class="col">
              <h2>{{ __('International Services and Camps')}}</h2>
              <hr class="style-two">
              <p class="lead">
              {{ __('Each year, we welcome international students to Space City Preparatory from China and other countries. These families value our rich academic program and entrust their children’s futures to our staff and school community. We take our role seriously, providing special services to help our international students as they make the transition to life in America.')}}
              </p>
              <h2><u>{{ __('Transitional Services')}}</u></h2>
              <p class="lead">
              {{ __('International students who are refining their English language skills have access to classes specially designed for those learning English as a second language. We offer sheltered classes for credit in some subjects for English language learners. We have a bilingual high school program in Mandarin and English called The Academy at SCPS, which provides intensive English instruction and academic support. In addition, a four-week summer program Accelerated English Camp, is designed to transition newly arrived students academically, socially, and culturally to American school life.')}}
              </p>
              <p class="lead">
                {{__('Our International Student Services (ISS) group provides additional services, including cultural orientations, housing support, and counseling about healthcare and personal emergencies.')}}
              </p>
              <h2><u>{{ __('Communication')}}</u></h2>
              <p class="lead">
              {{ __('We maintain strong ties with family members back home in their native language through regular newsletters, e-mail, Skype, and our online tool, Powerschool, which gives parents access to ongoing updates on their child’s progress. We have translators available for parents and students alike, and our written communications are provided in English and Chinese.')}}
              </p>
              <br>
              <a class="btn btn-primary" href="\documents">International Application .PDF</a>
          </div>
          <div class="col">
            @include('inc.sidebarlinks')
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
