<form action="login" method="POST" class="login-form">
		
	@include('app.partials.errors')
	
	{!! csrf_field() !!}

	<div class="form-group">
		<input type="text" class="form-control" placeholder="Email" name="email">
	</div>

	<div class="form-group">
		<input type="password" name="password" class="form-control" placeholder="Password">
	</div>

	<div class="form-group">
		<button class="btn btn-custom">Sign In</button>
	</div>

</form>