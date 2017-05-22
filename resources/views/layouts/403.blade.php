@extends('layouts.login_master')
@section('title' ,  'Error')
@section('content')
<div class="container body">
  <div class="main_container">
    <!-- page content -->
    <div class="col-md-12">
      <div class="col-middle">
        <div class="text-center text-center">
          <h1 class="error-number">403</h1>
          <h2>Access denied</h2>
          <p>Full authentication is required to access this resource. <a href="{{URL::previous()}}">Go back</a>
          </p>
          
        </div>
      </div>
    </div>
    <!-- /page content -->
  </div>
</div>
@endsection