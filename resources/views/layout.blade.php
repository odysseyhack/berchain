<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
  </head>
  <body>
    @include('header')

    <div class="container">

      @yield('content')

      @include('footer')
    </div>
    <script>
      window.Laravel = {};
      window.Laravel = {!! json_encode([
       'apiToken' => Auth::user()->api_token ?? null,
   ]) !!};
    </script>
    <script src="{{ mix('js/app.js') }}"></script>

  </body>
</html>
