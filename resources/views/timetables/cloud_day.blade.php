<!-- TEMPLATE INCOMPLETE -->

<div class="col-xs-2 day {{ $i + 1 > 5 ? 'weekend' : 'weekday' }} {{ strtolower(date('l', strtotime(date('l').' + '. $i .' days'))) }}">
	<div class="daytitle">
		<h4 class="hidden-xs text-center">{{ date('l', strtotime(date('l').' + '. $i .' days')) }}</h4>
		<h4 class="visible-xs text-center">{{ date('D', strtotime(date('D').' + '. $i .' days')) }}</h4>
	</div>
</div>

<!-- TEMPLATE INCOMPLETE -->