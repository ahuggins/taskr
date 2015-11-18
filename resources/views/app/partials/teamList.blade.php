<tr>
	<td>
		<a href="/teams/{{ $team->id }}">{{ $team->name }}</a>
	</td>
	<td>	
		<form method="POST" action="/team/{{ $team->id }}">
			<input name="_method" type="hidden" value="DELETE">
			{{ csrf_field() }}
			<button class="icon" type="submit">
				<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
			</button>
		</form>
	</td>
</tr>