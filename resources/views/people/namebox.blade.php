<div class="panel panel-default namebox">
	<div class="panel-body">
		<div class="row">
			<img id="person-photo" class="img-responsive col-xs-5" src="{{ $topic->get_photo($topic) }}">
			<div class="col-xs-7 person-info">
				<h4>{{ $topic->full_name }}</h4>
				<h4><small>{{ $topic->mis_id }}</small></h4>
				@if ($user->affiliation == 'staff')
					@if (!$topic->staff)
						<h4><small id="dob-{{ $topic->mis_id }}">DOB: {{ date('d M Y', strtotime($topic->date_of_birth)) }}</small></h4>
					@endif		
				@endif
				<h5 class="flags">
				@if ($topic->staff)
					<i class="text-success fa fa-mortar-board" title="Staff Member"></i>
				@endif	
				</h5>
			</div>
		</div>
	</div>
</div>

<!-- There are still some bits missing from this template -->