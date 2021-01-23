@extends('layout')

@section('head')
	<title>Register</title>
	<style type="text/css">
		.form-controll label {
		  display: block;
		}
		.form-controll {
		  margin-top: 10px;
		}
	</style>
@stop

@section('content')

	@if (session('errors'))
		<div class="alert alert-danger">
			{{ session('errors') }}
		</div>
	@endif

	<h1>Register</h1>
	<div class="col-md-6">
		<form id="register-form" method="post">
			@csrf
			<div class="form-controll">
				<label for="name">Name</label>
				<input type="text" name="name" id="name" class="form-control">
			</div>
			<div class="form-controll">
				<label for="email">Emails</label>
				<input type="text" name="email" id="email" class="form-control">
			</div>
			<div class="form-controll">
				<label for="password">Password</label>
				<input type="password" name="password" id="password" class="form-control">
			</div>
			<div class="form-controll">
				<label for="confirm-password">Confirm Password</label>
				<input type="password" name="password_confirmation" id="confirm-password" class="form-control">
			</div>
			<div class="form-controll">
				<input type="submit" name="submit" class="btn btn-primary" value="Register">
			</div>
		</form>
	</div>
@stop

@section('footer')

@stop

