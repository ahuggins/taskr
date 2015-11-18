@extends('app.layouts.master')

@section('content')

	<div class="col-md-8">
		<h3>Teams you Own</h3>
		<table class="table">
			<thead>
				<tr>
					<th>Name</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				@each ('app.partials.teamList', $owned, 'team', 'app.partials.noresult')
			</tbody>
		</table>
		<h3>Teams you're on</h3>
		<table class="table">
			<thead>
				<tr>
					<th>Name</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				@each ('app.partials.teamMemberList', $member, 'team', 'app.partials.noresult')
			</tbody>
		</table>
	</div>
	<div class="col-md-4">
		<ul>
			<li>
				list teams that the user is on 
				(but did not necessarily create...should provide a way to "leave" a team)
			</li>
		</ul>
	</div>

@stop