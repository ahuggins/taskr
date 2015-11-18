<tr>
	<td>
		<a href="/list/{{ $list->id }}">{{ $list->name }}</a>
	</td>
	<td>
		<form method="POST" action="/list/{{ $list->id }}">
			<input name="_method" type="hidden" value="DELETE">
			{{ csrf_field() }}
			<button class="icon" type="submit">
				<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>	
			</button>
		</form>
		
	</td>
</tr>