@extends('layout')
@section('content')
  <div id="dashboardData" class="d-none">
    {{ json_encode($project) }}
  </div>

  <div id="publicDashboard"></div>
@stop
