@extends('app.layouts.master')

@section('content')

	<div class="row tasks">
		<div class="col-md-12">
			<h1>{{ $list->name }} <span v-show="remaining.length">(@{{ remaining.length }})</span></h1>
		</div>
		<div class="col-md-8">
			<div v-show="remaining.length">
				<table class="table table-hover">
					<thead>
						<tr>
							{{-- <th width="5%">
								<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
							</th> --}}
							<th width="65%">Task</th>
							<th width="20%">Assigned To</th>
							<th width="15%">Actions</th>
						</tr>
					</thead>
					<tbody>
						
						<tr v-repeat="task: tasks | inProcess">
							{{-- <td>
								<input type="checkbox" 
										name="complete" 
										class="complete" 
								>
							</td> --}}
							<td><span v-on="dblclick: editTask(task)">@{{ task.content }}</span></td>
							<td></td>
							<td>
								<button v-on="click: removeTask(task)" class="icon">
									<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
								</button>
								<button v-on="click: toggleComplete(task)" class="icon">
									<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
								</button>
							</td>
						</tr>
					{{-- 	@each('app.partials.taskItem', $list->tasks, 'task', 'app.partials.noresult')
					 --}}</tbody>
				</table>
			</div>

			<form v-on="submit: addTask">
				<div class="add-task form-group">
					<input v-model="newTask"
							v-el="newTask"
							type="text" 
							name="content" 
							class="form-control" 
							placeholder="Add task and hit enter"
					>
				</div>
			</form>

			{{-- <pre>
				@{{ tasks | json }}
			</pre> --}}

			<div v-if="completions.length">
				<h2>Completed Tasks (@{{ completions.length }})</h2>
				<table class="table table-hover">
					<thead>
						<tr>
							{{-- <th width="5%">
								<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
							</th> --}}
							<th width="65%">Task</th>
							<th width="20%">Assigned To</th>
							<th width="15%">Actions</th>
						</tr>
					</thead>
					<tbody>
						
						<tr v-repeat="task: tasks | complete">
							{{-- <td>
								<input type="checkbox" 
										name="complete" 
										class="complete" 
								>
							</td> --}}
							<td><span v-on="dblclick: editTask(task)">@{{ task.content }}</span></td>
							<td></td>
							<td>
								<button v-on="click: removeTask(task)" class="icon">
									<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
								</button>
								<button v-on="click: toggleComplete(task)" class="icon">
									<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
								</button>
							</td>
						</tr>
					</tbody>
				</table>
				<button 
					class="btn btn-danger"
					v-on="click: clearCompleted"
				>
					Clear Completed
				</button>
			</div>
		</div>
		<div class="col-md-4">
			<button v-on="click: completeAll"
					v-if="remaining.length"
				class="btn btn-custom"
			>
			Mark All As Complete
			</button>
		</div>
	</div>

@stop

@section('scripts')
	@include('app.partials.vuejs')
@stop