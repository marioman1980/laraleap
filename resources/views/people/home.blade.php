<!-- TEMPLATE INCOMPLETE -->

<!-- Check Settings home page -->
<?php $settings_home_page = 'progress'; ?>
@if ($settings_home_page == 'progress')
	<div id="home" class="row">
		<div id="progress" class="panel panel-default">
			<div class="panel-body">
				<div class="col-md-12">
					<div class="row">
						<div class="col-xs-2 hidden-xs hidden-sm">
							<div id="news"><!-- Check for news -->
								@if (!isset($news))
									@include('people.news_modal')
								@endif
							</div>
						</div>
						<div id="aspiration">@include('people.aspiration')</div>
						<div id="notifications"><!-- Check for notifications -->
							@if (isset($notifications))
								@include('people.notifications')
							@endif
						</div>
					</div>
					<hr style="margin-top: 5px">
					<div style="text-align: center">
						<h3 class="title" style="color: #4f2170; margin-bottom: 10px">Progress and Attendance Reviews (PAR)</h3>
					</div>
				</div>
				<div id="progress-bars">@include('people.progress_bars')</div>
				<div id="dynamic-reviews">@include('people.review_modal')</div>
				<div id="dynamic-initials">@include('people.initial_modal')</div>								
			</div>
		</div>
	</div>
@endif

<!-- TEMPLATE INCOMPLETE -->