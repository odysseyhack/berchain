<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $company_name }} - Badge</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <div id="badge" class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <h2 class="card-header">
              {{ $company_name }}
            </h2>

            <div class="card-body">
              <p>{{ $description }}</p>
              <p>{{ $some_other_field }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="{{ mix('js/app.js') }}"></script>
  </body>
</html>
