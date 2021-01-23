@extends('layout')

@section('head')
	<title>Login</title>
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

	<h1>Login</h1>
	<div class="col-md-6">
		<form id="login-form" method="post">
			@csrf
			<div class="form-controll">
				<label for="email">Emails</label>
				<input type="text" name="email" id="email" class="form-control">
			</div>
			<div class="form-controll">
				<label for="password">Password</label>
				<input type="password" name="password" id="password" class="form-control">
			</div>
			<div class="form-controll">
				<input type="submit" name="submit" value="Login" class="btn btn-primary">
			</div>
		</form>
	</div>
@stop

@section('footer')
	<!-- <script type="text/javascript">
		$(document).ready(function(){
			$("#login-form").submit(function(e){
				e.preventDefault();

				$.ajax({
					url:'/api/login',
					type: 'post',
					data: jQuery(this).serialize(),
					success: function(response){
						localStorage.setItem('accessToken', JSON.stringify(response.accessToken));
						localStorage.setItem('user', JSON.stringify(response.user));
						window.location.href = '/dashboard';
					},
					error: function(error){
						console.error(error.responseText);
					}
				})
			});
		});
	</script> -->
@stop

