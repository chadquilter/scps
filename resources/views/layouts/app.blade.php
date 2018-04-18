<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="scps.com">
    <meta name="keywords" content="houston, dallas, fort worth, corpus christi, san antonio, el paso, texas, tx"/>
    <meta name="description" content="Space City Preparatory School"/>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Space City Preparatory School') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('images/scps.ico') }}">
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body style="background-attachment:fixed;background-color:#fff;background-position:center top;background-repeat:repeat-x;background-image: url(/images/art-bg.jpg); width=100%; z-index: 1;">
  <main role="main">
    @include('inc.navbar')
    <br>
    <div class="body-container">
      <br>
      @yield('content')
    </div>
    @include('inc.footer')
  </main>
</body>
<!-- Scripts -->
<script>
  $(window).load(function() {
    // chat face un focus
    window.scrollTo(0, 0);
  });
</script>
<script src="https://getbootstrap.com/dist/js/bootstrap.min.js"></script>
</html>
