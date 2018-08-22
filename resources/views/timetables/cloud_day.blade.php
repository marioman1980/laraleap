<!-- TEMPLATE INCOMPLETE -->
<div class="col-xs-2 day {{ $i + 1 > 5 ? 'weekend' : 'weekday' }} {{ strtolower(date('l', strtotime($date.' + '. $i .' days'))) }}">
	<div class="daytitle">
		<h4 class="hidden-xs text-center">{{ date('l', strtotime($date.' + '. $i .' days')) }}</h4>
		<h4 class="visible-xs text-center">{{ date('D', strtotime($date.' + '. $i .' days')) }}</h4>
	</div>
<?php $cloud_slots = []; ?>
@foreach ($registers as $register)	
		<?php array_push($cloud_slots, $register->get_slot($date, $i)); ?>
@endforeach
@foreach ($cloud_slots as $cloud_slot)
	@if (!is_null($cloud_slot))
		@include('timetables.cloud_slot')
	@endif
	
@endforeach
	
</div>

<!-- TEMPLATE INCOMPLETE -->