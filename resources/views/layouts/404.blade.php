@extends('layouts.login_master')
@section('title' ,  'Error')
@section('content')
<div class="container body">
	<div class="main_container">
		<!-- page content -->
		<div class="col-md-12">
			<div class="col-middle">
				<div class="text-center text-center">
					<h1 class="error-number">404</h1>
					<h2>Sorry but we couldn't find this page</h2>
					<p>This page you are looking for does not exist <a href="{{URL::previous()}}">Go back</a>
					</p>
					
				</div>
			</div>
		</div>
		<!-- /page content -->
	</div>
</div>
@endsection