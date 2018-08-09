<!-- TEMPLATE INCOMPLETE -->

<?php $npr = 5; ?><!-- No. of progress reviews -->

<div class="col-md-12">
<!-- Check progress bar -->
	@if (isset($progress_bar))
		<p style="text-align: center">It looks like you are not currently enrolled on any courses at South Devon College. If you feel this is a mistake, please speak to your Personal Tutor or visit Helpzone on Level 3.</p>
	@endif
<!-- Foreach progress_bar -->
	<div class="course-progress">
		<div class="row row-eq-height">
		<!-- If $progress->show_par_reviews -->	
		@if (1 == 1)
			<div class="col-md-6 col-xs-12 top-section">
				<h4 style="margin-bottom: 5px">Target Grade For</h4>
				<h4>COURSE TITLE</h4><!-- Get course title -->
			</div>
		@else	
		<!-- ELSE -->
			<div class="col-md-6 col-xs-12 top-section">
				<h4>COURSE TITLE</h4><!-- Get course title -->
			</div>	
		<!-- End if $progress->show_par_reviews -->
		@endif
		<!-- GET bg-color for div -->
			<div class="col-md-6 col-xs-12 top-section attendance-block clickable" style="background-color: #a66" data-toggle="modal" data-target="#modal"><!-- Get attendance id -->
				<h4>Attendance</h4>
				@if (1 == 1)<!-- Check attendance -->
					<h3> 0%</h3>
				@else
					<h3> 90%</h3><!-- Get attendance % -->
				@endif
			</div>
		</div>
	<!-- If $progress->show_par_reviews -->	
	@if (1 == 1)	
		<div class="row">
			<div class="col-md-2 hidden-xs col-sm-2 review-section" data-id="" data-editable=""><!-- Get par info -->
				<h5> Initial Review</h5>
				@if (1 == 1)<!-- Check initial review -->
					<h4> Completed</h4>
				@else
					Incomplete
				@endif
			</div>
		@for ($i = 1; $i < $npr + 1; $i++)
		    @if (1 == 1)<!-- Check review presence and no. -->
				<div class="col-md-2 hidden-xs col-sm-2 review-section has_tooltip progress-review clickable" title="" data-placement="right" style="color:black" data-id="" data-att="" data-number="{{ $i }}" data-max-number="{{ $npr }}" data-editable=""><!-- Fill in the gaps -->
				@if ($i == $npr)
					<h5> Achieved</h5>
				@else
					<h5> Working at</h5>
				@endif
					<h4>MERIT</h4><!-- Get working at -->
					<h6 class="pull-bottom pull-right"> PAR {{ $i }}
				</div>
		    @endif
		@endfor			
		</div>
	@endif	
	</div>
<!-- End foreach progress_bar -->	
	<hr>
</div>

<!-- TEMPLATE INCOMPLETE -->