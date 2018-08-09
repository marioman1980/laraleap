<!-- TEMPLATE INCOMPLETE -->

<?php $npr = 5; ?>

<div class="modal fade" id="review-modal">
  	<div class="modal-dialog modal-lg">
    	<div class="modal-content">
      		<div class="modal-header">
        		<button aria-label="Close" class="close" data-dismiss="modal" type="button">
          			<span aria-hidden="true">&times;</span>
        		</button>
        		<h3 class="modal-title" id="review-title">Progress & Attendance Review</h3>
      		</div>
      		<input type="hidden" disabled="true" value="false" id="open-id">
      		<form accept-charset="UTF-8" action="/events" class="form" id="new_progress_review" method="post">
      		@if ($user->staff)
				<input id="{{ $topic->id }}" type="hidden" readonly value="{{ $topic->id }}">
			@endif
      		@if ($user->staff)
				<input id="" type="hidden" readonly><!-- Get progress id -->
			@endif			
				<div class="modal-body col-md-12">
					<div class="form-group row">
						<div class="col-md-3">
							<div class="input-group">
								<div class="input-group-addon"> Number</div>
								<input type="number" readonly class="form-control" {{ !$user->staff ? 'disabled' : '' }}>
							</div>
						</div>
						<div class="col-md-5">
							<div class="input-group">
								<div class="input-group-addon"> Working at</div>
								<select class="form-control" {{ !$user->staff ? 'disabled' : '' }}>
							<!-- Get options -->
								</select>
							</div>
						</div>
						<div class="col-md-4">
							<div class="input-group">
								<div class="input-group-addon"> Attendance</div>
								<input type="text" id="progress_review_attendance" readonly class="form-control" {{ !$user->staff ? 'disabled' : '' }}>
							</div>
						</div>						
					</div>
				@if ($user->staff)
					@if (1 == 0)<!-- CHeck for par guidance -->
						<div id="par-guidance-section">
							<div id="par-guidance" class="guidance row">
							@for ($i = 1; $i < $npr + 1; $i++)
								<div id="guidance-text-{{ $i }}" class="guidance-text-class">
									<h2> Guidance</h2>
									<ul>
										<li> Overall Learner/Tutor Comments.</li>
										<li class="par-guidance-previous"> Review improvement targets from previous PAR – have these been met? How has this been evidenced?</li>
										<li class="par-guidance-next"> Improvement targets for next PAR (including any carried over from previous PAR). Please focus on skills and knowledge for improvement targets.</li>
									</ul>
								</div>
							@endfor
							</div>
						</div>
					@endif
				@endif	
				<div class="form-group row">
					<div class="col-md-12">
					<textarea class="form-control" style="height: 200px" placeholder="Learner / Tutor Comments..." {{ !$user->staff ? 'disabled' : '' }}></textarea>
					</div>
				</div>		
				<div class="form-group row" id="current-level">
					<div class="col-md-6">
						<div class="input-group">
							<div class="input-group-addon">Current Level</div>
							<select class="form-control level" {{ !$user->staff ? 'disabled' : '' }} id="progress_review_level" name="progress_review[level]" required="required">
							<option disabled> Choose</option>
							<option class="purple" value="purple">PURPLE (Consistently achieving at least one grade above target)</option>
							<option class="green" value="green"> GREEN (On target and making expected progress)</option>
							<option class="amber" value="amber"> AMBER (One grade below target)</option>
							<option class="red" value="red"> RED (Two grades below target)</option>
							</select>
						</div>
					</div>
				</div>
				</div>
				<div class="modal-footer no-padding">
					<div id="submitted">
						<div class="pull-left review-author col-md-6">
						<em class="pull-left" id="review-by"></em>
						</div>
					@if ($user->staff)
							<div class="edit_countdown_timer col-md-4">
							<small id="review_edit_countdown"></small>
							</div>
						<div class="pull-right action-button col-md-2">
							<button class="btn btn-primary" id="edit-review" type="button">Edit</button>
							<button class="btn btn-success" id="save-review" type="button">Save</button>
						</div>
					@endif
					</div>
					<div id="review-submit" class="submit-review">
					@if ($user->staff)
						<input type="submit" class="btn btn-primary pull-right full-button" name="commit" value="Submit Review">
					@endif	
					</div>
				</div>
      		</form>
    	</div>
  	</div>
</div>
<script type="text/javascript">
</script>

<!-- TEMPLATE INCOMPLETE -->