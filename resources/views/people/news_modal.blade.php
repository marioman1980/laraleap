<div class="row">
 	<div class="col-xs-12">
 		<i class="fa fa-info-circle fa-2x modal-text" aria-hidden="true" data-target="#newsModal" data-toggle="modal" style="color: #4f2170"></i>
 	</div>
</div>
<div id="newsModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button class="close" data-dismiss="modal" type="button"> x</button>
				<h4 class="modal-title modal-text">Welcome to South Devon College</h4>
			</div>
			<div class="modal-body">
				<p> You can use LEAP to support your learning throughout this year. You can look at your <strong>timetable</strong>, check the <strong>progress</strong> of your studies and be updated on the <strong>latest news</strong> and <strong>upcoming events</strong>.</p>
				<p> <i>Remember to also check Moodle regularly, this is where you will find lots of information and support materials about your programme of study; including English, maths and tutorial.</i></p>
			</div>
			<div class="modal-footer">
				<a href="https://moodle.southdevon.ac.uk" target="_blank">
					<button class="btn btn-default center modal-button width-100" type="button">Click here to go to Moodle</button>
				</a>
			</div>
		</div>
	</div>
</div>
@if ($notify)
	<script>
	    $('#newsModal').modal();
	</script>
@endif