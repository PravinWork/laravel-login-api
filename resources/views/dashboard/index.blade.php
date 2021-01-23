@extends('layout')

@section('content')
	<h1>Dashboard</h1>
	<div class="col-md-12">
		<a class="btn btn-primary" href="{{route('logout')}}">Logout</a>
	</div>
	<div class="col-md-6">
		<table class="table">
			<thead><th>Sr</th><th>Name</th><th>Email</th></thead>
			<tfoot><th>Sr</th><th>Name</th><th>Email</th></tfoot>
			<tbody>
			@if(!empty($users))
				@foreach($users as $key => $user)
					<tr><td>{{ $key+1 }}</td><td>{{ $user->name }}</td><td>{{ $user->email }}</td></tr>
				@endforeach
			@else
				<tr><td colspan="2">No data found</td></tr>
			@endif
			</tbody>
		</table>
	</div>
@stop
