@if ($userLists)
	@foreach ($userLists as $list)
		<li><a href="/list/{{ $list->id }}">{{ $list->name }}</a></li>
	@endforeach
@endif