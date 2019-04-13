@extends('layout')

@section('content')
  <div id="badge" class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <h2 class="card-header">
          {{ $company_name }}
        </h2>

        <div class="card-body">
          This is the dashboard
          <p>{{ $description }}</p>
          <p>{{ $some_other_field }}</p>
        </div>
        <div id="dashboardData" style="display:none">{{ json_encode($project)}}</div>
      </div>
    </div>
  </div>
@stop
