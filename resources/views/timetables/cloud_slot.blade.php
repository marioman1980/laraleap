<div id="{{ $cloud_slot->mis_id }}" class='timetable-event' style="top:{{ $cloud_slot->timetable_margin() + 37 }}px;height:{{ $cloud_slot->timetable_height() }}px" value="{{ date('Y-m-d H:i:s', strtotime($cloud_slot->timetable_start)) }}" onclick="selectRegEvent(this.id)">
	<h5>{{ $cloud_slot->title }}</h5>
	<ul>
		<li>{{ date('H.i', strtotime($cloud_slot->timetable_start)) }} - {{ date('H.i', strtotime($cloud_slot->timetable_end)) }}</li>
		<li>{{ $cloud_slot->room }}</li>
		<li>{{ $cloud_slot->teacher }}</li>
	</ul>
</div>
<br>
<script type='text/javascript'>
	function selectRegEvent(regEventId) {

		console.log(regEventId);

		regEvent = document.getElementById(regEventId);

		if(regEvent.classList.contains('checked')) {
			regEvent.style.border = '1px solid #ccc';
			regEvent.classList.remove('checked');
		}
		else {
			regEvent.style.border = '2px solid red';
			regEvent.classList.add('checked');  
		}
	}
</script>
