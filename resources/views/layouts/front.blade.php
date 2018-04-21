<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="CNQ Software Services">
    <meta name="keywords" content="{{__('meta_keywords')}}"/>
    <meta name="description" content="{{__('page_description')}}"/>
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
  <script>
    $(window).load(function() {
      // chat face un focus
      window.scrollTo(0,document.body.scrollHeight);
    });
  </script>
</body>

</html>
