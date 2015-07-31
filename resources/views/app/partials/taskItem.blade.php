<tr @if ($task->complete) {{ 'class=completed' }} @endif>
	<td><input type="checkbox" name="complete" class="complete" @if ($task->complete) {{ 'checked' }} @endif ></td>
	<td>{{ $task->content }}</td>
	<td>{{ $task->user->name }}</td>
	<td>
		<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
	</td>
</tr>