<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="CNQ Software Services">
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Space City Preparatory School') }}</title>
    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/footer.css" rel="stylesheet">
    <link href="/css/image_styles.css" rel="stylesheet">
    <!-- js -->
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
  <main role="main">
    @include('inc.navbar')
    <div class="body-container" >
      <br>
      @include('inc.messages')
      <br>
      @yield('content')
    </div>
    @include('inc.footer')
  </main>
</body>
</html>
