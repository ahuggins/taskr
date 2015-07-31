@extends('app.layouts.master')

@section('content')

	<div class="row">
		<form action="/sign-up" method="POST" class="col-md-8">

			@include('app.partials.errors')
			
			{!! csrf_field() !!}

			<div class="form-group">
				<label for="name">Name:</label>
				<input class="form-control" name="name" placeholder="Full Name" />
			</div>

			<div class="form-group">
				<label for="email">Email:</label>
				<input type="text" name="email" placeholder="Email" class="form-control" />
			</div>

			<div class="form-group">
				<label for="password">Password:</label>
				<input type="password" name="password" placeholder="Password" class="form-control">
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-custom">Submit</button>
			</div>

		</form>
	</div>

@stop