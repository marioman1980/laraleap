<!-- TEMPLATE INCOMPLETE -->

<div class="btn-group btn-group-justified panel">
	@if ($topic->staff)
		@if ($controller_name == 'People')
			<a href="/people/{{ $topic->mis_id }}/timetables" class="btn btn-default"><i class="fa fa-fw fa-calendar"></i> Timetable</a>
		@endif
	@else
		@if ($controller_name == 'Timetables')
			<a href="/people/{{ $topic->mis_id }}" class="btn btn-default">
				<i class="fa fa-fw fa-home"></i> Home</a>
			</a>
		@else
			<a href="/people/{{ $topic->mis_id }}/timetables" class="btn btn-default"><i class="fa fa-fw fa-calendar"></i> Timetable</a>	
		@endif 	
	@endif
	@if ($user->staff)
		<a href="#" class="btn btn-default slchk"><i class="fa fa-fw fa-bolt"></i> EBS (IE Only)</a>
	@endif
</div>
@if ($user->staff)
	<div class="btn-group btn-group-justified panel">
	<a href="#" class="btn btn-default" target="_blank"><i class="fa fa-fw fa-random"></i>e-LAAF</a>
	</div>
@endif

<!-- TEMPLATE INCOMPLETE -->