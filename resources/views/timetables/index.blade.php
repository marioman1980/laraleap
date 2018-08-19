<!-- TEMPLATE INCOMPLETE -->
<div class='row'>
	<ul class='col-xs-9 text-left pager' style='margin-top:0;padding-right:0;margin-bottom:0'>
		<form accept-charset="UTF-8" action="https://leap.southdevon.ac.uk/people/{{ $topic->mis_id }}/timetables" class="form-inline" method="get">
			<li>
<!-- NEED TO GET BEGINNING OF WEEK -->			
				<a class="btn" href="/people/{{ $topic->mis_id }}/timetables?date={{ date('d F Y', strtotime($date.'-1 week')) }}">
					<i class="fa fa-arrow-left"></i> Previous
				</a>
			</li>
			<div class="hidden-xs input-group">
				<input class="form-control" data-date-format="d MM yyyy" data-provide="datepicker" id="date" name="date" type="text" value="{{ $date }}">
				<span class="input-group-btn">
					<button class="btn btn-primary">Go!</button>
				</span>
			</div>
			<li>
				<a class="btn" href="/people/{{ $topic->mis_id }}/timetables?date={{ date('d F Y', strtotime($date.'+1 week')) }}">Next <i class="fa fa-arrow-right"></i>
				</a>
			</li>
		</form>	
	</ul>		
	<button class='btn btn-primary pull-right' data-target='#add-tt-act-modal' data-toggle='modal'>
		<i class='fa fa-fw fa-plus'></i>Add Event
	</button>
</div>
<div class='row panel panel-default' id='timetable'>
	<div class='col-xs-1'>
		<div class='hour' style='height:37px'></div>
	@for ($hour = 8; $hour < 21; $hour++)	
		<div class="hour">
        	<div class="visible-xs">{{ $hour }}</div>
        	<div class="hidden-xs">{{ $hour }}.00</div>
		</div>
	@endfor
	</div>
	<div class='col-xs-1 day'>
		<button class='btn btn-primary' id='show_weekend' style='width:100%'>
		  	<i class='fa fa-angle-double-right'></i>
		</button>
		<button class='btn btn-primary' id='hide_weekend' style='width:100%;display:none'>
		  	<i class='fa fa-angle-double-left'></i>
		</button>
	</div>
</div>
<div class='row'>
	<div class='pull-right'>
		<div class='btn-group dropup'>
			<button class='btn btn-default dropdown-toggle' data-toggle='dropdown'>
				<i class='fa fa-download fa-fw'></i>Download as calendar
				<span class='caret'></span>
			</button>
			<ul class='dropdown-menu dropdown-menu-right'>
				<li>
				</li>
				<li>
				</li>	
			</ul>
		</div>
	</div>
</div>
<div class='modal fade' id='add-tt-act-modal'>
	<div class='modal-dialog'>
		<div class='modal-content'>
			<form action="/events" class="form" id="new_tt_activity" method="post">
        		<div class="modal-header">
          			<button class="close" data-dismiss="modal">
            			<span> &times;</span>
            		</button>
          			<h4> Add a Timetable Event</h4>
          		</div>
        		<div class="modal-body">
          			<div class="row">
            			<div class="form-group col-xs-6">
            				<label for="tmp_date">Date</label>
            				<input type="text" id="tmp_date" name="tmp_date" class="form-control" data-provide="datepicker" value="{{ $date }}">
            			</div>
						<div class='form-group col-xs-6'>
							<label for="tmp_time">Time</label>
							<select id="tmp_time" name="tmp_time" class="form-control time-select">
							</select>
						</div>
            		</div>
					<div class='row'>
						<div class='form-group col-xs-6'>
							<label for="timetable_length">Length</label> 
							<select id="timetable_length" name="timetable_length" class="form-control">
							</select>
						</div>
						<div class='form-group col-xs-6'>
							<label for="repeat_type">Repeat Type</label> 
							<select id="repeat_type" name="repeat_type" class="form-control">
							</select>
						</div>
					</div>
					<div class='row'>
						<div class='form-group col-xs-6'>
							<label for="repeat_number">No of Repeats</label> 
							<select id="repeat_number" name="repeat_number" class="form-control">
							</select>						
						</div>
						<div class='form-group col-xs-6'>
							<label for="category">Category</label> 
							<select id="category" name="category" class="form-control">
							</select>						
						</div>
					</div>
					<div class='row'>
						<div class='form-group col-xs-12'>
							<label for="body">Text</label>
							<input type="text" id="body" name="body" class="form-control">
						</div>
					</div>
            	</div>
			</form>
		</div>
	</div>
</div>

<!-- TEMPLATE INCOMPLETE -->