@extends('app.layouts.master')

@section('content')
	
	<div class="row">
		<div class="col-md-12">
			<h1>Welcome to Taskr.</h1>	
			<p>A simple Task Application built with Laravel.</p>
		</div>
	</div>

	<div class="row">
		<div class="col-md-6">
			It's easy. Sign up, create a list, Add Tasks.
		</div>
		<div class="col-md-6">
			<p>
				You can Type and Hit Enter to add tasks quickly. You can double click an item to edit it. Use the <button class="icon">
									<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
								</button> to toggle between complete or not. The <button class="icon">
									<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
								</button> to delete...which is a permanent edit.
			</p>
			<p>
				Use <button class="btn btn-custom">Mark All As Complete</button> to mark all tasks in a list as complete.
			</p>
			<p>
				Use <button class="btn btn-danger">Clear Complete</button> to remove the completed tasks from the list. This is a permanent edit.
			</p>
		</div>
	</div>



	

@stop