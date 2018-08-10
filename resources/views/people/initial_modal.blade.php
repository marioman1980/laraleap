<!-- TEMPLATE INCOMPLETE -->

<div class="modal fade" id="initial-modal">
  	<div class="modal-dialog modal-lg">
    	<div class="modal-content">
      		<div class="modal-header">
        		<button aria-label="Close" class="close" data-dismiss="modal" type="button">
          			<span aria-hidden="true">&times;</span>
        		</button>
        		<h3 class="modal-title">Initial Review</h3>
      		</div>
      		<form>
      		@if ($user->staff)
      			<input id="initial_review_topic_id" type="hidden" readonly value="{{ $topic->id }}">
      			<input id="initial_review_progress_id" type="hidden" readonly>
      		@endif
        		<div class="modal-body col-md-12">
      				<div class="form-group row">
			            <div class="col-md-4">
			              	<div class="input-group">
			                	<div class="input-group-addon">Target Grade</div>
		                		<select class="form-control" required {{ !$user->staff ? 'disabled' : '' }}>
		                		</select><!-- Get grades -->
			              	</div>
			            </div>
		          	</div>
		          	<div class="form-group row">
			            <div class="col-md-12">
			            	<textarea id="initial_review_body" class="form-control" style="height: 200px" placeholder="Learner / Tutor Comments..." {{ !$user->staff ? 'disabled' : '' }}></textarea>
			            </div>
		          	</div>
          			<div id="scores">
			            <div class="form-group row">
			              	<div class="col-md-6">
			                	<div class="input-group width-100">
			                  		<div class="input-group-addon ir-score">Maths Initial Assessment</div>
			                  		<input class="form-control" name="maths_ia" disabled>
			                	</div>
			              	</div>
			              	<div class="col-md-6">
			                	<div class="input-group width-100">
			                  		<div class="input-group-addon ir-score" style="width: 188px">English Initial Assessment</div>
			                  		<input class="form-control" name="english_ia" disabled>
			                	</div>
			              	</div>
			            </div>
            			<div class="form-group row">
              				<div class="col-md-6">
                				<div class="input-group width-100">
                  					<div class="input-group-addon ir-score">Maths Diagnostic</div>
                  					<input class="form-control" name="maths_da" disabled>
                				</div>
              				</div>
              				<div class="col-md-6">
                				<div class="input-group width-100">
                  					<div class="input-group-addon ir-score">English Diagnostic</div>
                  					<input class="form-control" name="english_da" disabled>
                				</div>
              				</div>
            			</div>
            			<div class="form-group row">
              				<div class="col-md-6">
                				<div class="input-group width-100">
                  					<div class="input-group-addon ir-score">GCSE Score</div>
                  					<input class="form-control" name="qca_score" disabled>
                				</div>
              				</div>
              				<div class="col-md-6">
                				<div class="input-group width-100">
                  					<div class="input-group-addon ir-score">L3 Alps Target Grade</div>
                  					<input class="form-control" name="subject_grade" disabled>
                				</div>
              				</div>
            			</div>
          			</div>
        		</div>
        		<div class="modal-footer no-padding">
          			<div id="submitted">
            			<div class="pull-left review-author col-md-6">
              				<em class="pull-left" id="initial-review-by"></em>
            			</div>
 					@if ($user->staff)           
              			<div class="edit_countdown_timer col-md-4">
                			<small id="initial_edit_countdown"></small>
              			</div>
              			<div class="pull-right action-button col-md-2">
                			<button class="btn btn-primary" id="edit-initial-review" type="button">Edit</button>
                			<button class="btn btn-success" id="save-initial-review" type="button">Save</button>
              			</div>
              		@endif
          			</div>
          			<div class="no-padding" id="initial-review-submission">
            		@if ($user->staff)
              			<input class="full-button btn btn-primary pull-right" name="commit" type="submit" value="Submit review">
            		@endif
          			</div>
        		</div>
      		</form>
   		</div>
	</div>
</div>

<!-- TEMPLATE INCOMPLETE -->