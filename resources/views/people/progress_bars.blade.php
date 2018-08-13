<!-- TEMPLATE INCOMPLETE -->

<?php $npr = 5; ?><!-- No. of progress reviews -->

<div class="col-md-12">
@if (!$progress_bar)
	<p style="text-align: center">It looks like you are not currently enrolled on any courses at South Devon College. If you feel this is a mistake, please speak to your Personal Tutor or visit Helpzone on Level 3.</p>
@else
@foreach ($progress_bar as $progress)
	<div class="course-progress">
		<div class="row row-eq-height">
		@if ($progress->show_par_reviews())
			<div class="col-md-6 col-xs-12 top-section {{ $progress->initial ? 'present' : '' }} {{ $progress->initial || (!$progress->initial && App\Models\InitialReview::par_enabled($user)) ? 'initial-review clickable' : '' }}" data-id="{{ $progress->initial ? $progress->initial->id : '' }}" data-progress-id="{{ $progress->id }}" title="{{ $user->staff ? strtoupper($progress->course_code) : '' }}">
				<h4 style="margin-bottom: 5px">Target Grade For</h4>
				<h4>{{ strtoupper($progress->course_title) }}</h4>
			@if ($progress->initial)
				<h3>{{ $progress->initial->target_grade }}</h3>
			@endif
			</div>
		@else	
			<div class="col-md-6 col-xs-12 top-section" title="{{ $user->staff ? strtoupper($progress->course_code) : '' }}">
				<h4>{{ strtoupper($progress->course_title) }}</h4>
			</div>	
		@endif
		<!-- GET bg-color for div -->
			<div class="col-md-6 col-xs-12 top-section attendance-block clickable" style="background-color: #a66" data-toggle="modal" data-target="#modal_"><!-- Get attendance id -->
				<h4>Attendance</h4>
				@if (!$topic->get_attendance($progress->course_type))
					<h3> 0%</h3>
				@else
					<h3> {{ $topic->get_attendance($progress->course_type)->att_year }}%</h3>
				@endif
			</div>
		</div>
	@if ($progress->show_par_reviews())	
		<div class="row">
			<div class="col-md-2 hidden-xs col-sm-2 review-section {{ $progress->initial ? 'present' : '' }} {{ $progress->initial || (!$progress->initial && App\Models\InitialReview::par_enabled($user)) ? 'initial-review clickable' : '' }}" data-id="{{ $progress->initial ? $progress->initial->id : '' }}" data-progress-id="{{ $progress->id }}">
				<h5> Initial Review</h5>
				@if ($progress->initial)
					<h4> Completed</h4>
				@else
					Incomplete
				@endif
			</div>
		@for ($i = 0; $i < $npr; $i++)
			@if (isset($progress->reviews[$i]))
				<?php $review = $progress->reviews[$i]; ?>
				<div class="col-md-2 hidden-xs col-sm-2 review-section has_tooltip progress-review clickable {{ $review->level }}" title="{{ $review->ragp_desc() }}" data-placement="right" style="color:black" data-id="" data-att="" data-number="{{ $i }}" data-max-number="{{ $npr }}" data-editable=""><!-- Fill in the gaps -->
				@if ($i == $npr)
					<h5> Achieved</h5>
				@else
					<h5> Working at</h5>
				@endif
					<h4>{{ $review->working_at }}</h4><!-- Get working at -->
					<h6 class="pull-bottom pull-right"> PAR {{ $i + 1}}</h6>
				</div>
			@else
				<div class="col-md-2 hidden-xs col-sm-2 review-section">
					<h5> Review</h5>
					<h6 class="pull-bottom pull-right"> PAR {{ $i + 1}}</h6>
				</div>
		    @endif
		@endfor			
		</div>
	@endif	
	</div>
	<hr>
@endforeach
@endif
	<hr>
</div>

<!-- TEMPLATE INCOMPLETE -->