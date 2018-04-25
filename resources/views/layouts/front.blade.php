<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="CNQ Software Services">
    <meta name="keywords" content="{{__('School, Learning in the US, Learn English In the US, Enlgish in the USA, Learning world wide, learn english, speak english, learn american culture, speak native language usa')}}"/>
    <meta name="description" content="{{__('School, Learning in the US, Learn English In the US, Enlgish in the USA, Learning world wide, learn english, speak english, learn american culture, speak native language usa')}}"/>
    <!-- <meta name="robots" content="index, follow"> -->
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{__('Space City Preparatory School') }}</title>
    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('images/scps.ico') }}">
    <!-- js -->
    <script src="{{ asset('js/app.js') }}"></script>

</head>
<body>
  <main role="main">
    <div class="container">
        @include('inc.navbar')
        @yield('inc.messages')
        @yield('content')
        @include('inc.footer')
    </div>
  </main>
</body>
</html>
