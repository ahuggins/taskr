@extends('app.layouts.master')

@section('content')

	@include('app.partials.errors')

	<div class="row">
		<div class="col-md-8">
			<table class="table table-hover">
		  		<thead>
		  			<tr>
		  				<th>List</th><th>Actions</th>
		  			</tr>
		  		</thead>
		  		<tbody>
					@each('app.partials.listItem', $lists, 'list', 'app.partials.noresult')
		  		</tbody>
			</table>		
		</div>
		<div class="col-md-4">
			Sidebar here
		</div>
	</div>

@stop