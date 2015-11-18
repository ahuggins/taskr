@extends('app.layouts.master')

@section('content')

	<div class="col-md-8">
		<table class="table">
			<thead>
				<tr>
					<th>Name</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				@each ('app.partials.memberList', $team, 'member', 'app.partials.noresult')
			</tbody>		
		</table>	
	</div>
	<div class="col-md-4">
		Sidebar
	</div>
	
@stop