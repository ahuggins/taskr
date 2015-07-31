@extends('app.layouts.master')

@section('content')

	<div class="row">
		<form action="/list" method="POST">
			{!! csrf_field() !!}
			<div class="col-md-8 well">
					<div class="form-group">
						<label for="name">List Name:</label>
						<input class="form-control" type="text" name="name" placeholder="Name">
					</div>			

					<div class="form-group">
						<label for="description">List Description</label>
						<textarea class="form-control" name="description" placeholder="A short description of the list."></textarea>
					</div>
			</div>
			<div class="col-md-4">
				<button class="btn btn-custom" type="submit">
					Create List
				</button>
			</div>
		</form>
	</div>

@stop