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
      			<input>
      			<input>
      <%= create_event_form InitialReview do |f| %>
        <%= (f.text_field :topic_id, :type => 'hidden', :readonly => true, :value => @topic.id) if @user.staff? %>
        <%= (f.text_field :progress_id, :type => 'hidden', :readonly => true) if @user.staff? %>
        		<div class="modal-body col-md-12">
      				<div class="form-group row">
			            <div class="col-md-4">
			              	<div class="input-group">
			                	<div class="input-group-addon">Target Grade</div>
			                <%= f.select(:target_grade, options_for_select(grades), {}, {:class => 'form-control', :disabled => (true unless @user.staff?), :required => true, :selected => 'Target Grade'}) %>
			              	</div>
			            </div>
		          	</div>
		          	<div class="form-group row">
			            <div class="col-md-12">
			              <%= f.text_area :body, :style => "height:200px", :placeholder => "Learner / Tutor Comments...", :class => 'form-control', :disabled => (true unless @user.staff?) %>
			            </div>
		          	</div>
          			<div id="scores">
			            <div class="form-group row">
			              	<div class="col-md-6">
			                	<div class="input-group width-100">
			                  		<div class="input-group-addon ir-score">Maths Initial Assessment</div>
			                  <%= text_field(nil, nil, :disabled => true, :class => "form-control", :name => 'maths_ia') %>
			                	</div>
			              	</div>
			              	<div class="col-md-6">
			                	<div class="input-group width-100">
			                  		<div class="input-group-addon ir-score" style="width: 188px">English Initial Assessment</div>
			                  <%= text_field(nil, nil, :disabled => true, :class => "form-control", :name => 'english_ia') %>
			                	</div>
			              	</div>
			            </div>
            			<div class="form-group row">
              				<div class="col-md-6">
                				<div class="input-group width-100">
                  					<div class="input-group-addon ir-score">Maths Diagnostic</div>
                  <%= text_field(:nil, nil, :disabled => true, :class => "form-control", :name => 'maths_da') %>
                				</div>
              				</div>
              				<div class="col-md-6">
                				<div class="input-group width-100">
                  					<div class="input-group-addon ir-score">English Diagnostic</div>
                  <%= text_field(nil, nil, :disabled => true, :class => "form-control", :name => 'english_da') %>
                				</div>
              				</div>
            			</div>
            			<div class="form-group row">
              				<div class="col-md-6">
                				<div class="input-group width-100">
                  					<div class="input-group-addon ir-score">GCSE Score</div>
                  <%= text_field(nil, nil, :disabled => true, :class => "form-control", :name => 'qca_score') %>
                				</div>
              				</div>
              				<div class="col-md-6">
                				<div class="input-group width-100">
                  					<div class="input-group-addon ir-score">L3 Alps Target Grade</div>
                  <%= text_field(nil, nil, :disabled => true, :class => "form-control", :name => 'subject_grade') %>
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
            <% if @user.staff? %>
              			<div class="edit_countdown_timer col-md-4">
                			<small id="initial_edit_countdown"></small>
              			</div>
              			<div class="pull-right action-button col-md-2">
                			<button class="btn btn-primary" id="edit-initial-review" type="button">Edit</button>
                			<button class="btn btn-success" id="save-initial-review" type="button">Save</button>
              			</div>
            <% end %>
          			</div>
          			<div class="no-padding" id="initial-review-submission">
            <% if @user.staff %>
              			<input class="full-button btn btn-primary pull-right" name="commit" type="submit" value="Submit review">
            <% end %>
          			</div>
        		</div>
      		</form>
   		</div>
	</div>
</div>
