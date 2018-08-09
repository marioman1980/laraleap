<!DOCTYPE>
<html>
<head>
	<title>{{ config('app.name') }} | {{ $topic->full_name }}</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css">
	<!-- Below two javascript links can be included at the bottom of page, just before </body> to improve performance -->
	<!-- jQuery library by Google-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" ></script>
	<!-- JavaScript from bootstrap CDN -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" async></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>

	<link href="https://fonts.googleapis.com/css?family=Oswald:500" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Patua+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">	

</head>
<body id="cleap">
	@include('layouts.top_bar.main')
	<div class="container">
	@if ($topic)
		<div class="row visible-xs visible-sm">
			<div class="col-xs-12 hidden-clidebar">
				<h3 style="margin-top: 0">
					{{ $topic->full_name }}
				</h3>
			</div>
		</div>
	@endif
		<div class="row">
		@if ($topic)
			<div id="clidebar" class="col-lg-3 col-md-4 visible-lg visible-md">
				@include('people.namebox')
				@if ($topic->kind_of() == 'Person')
<!-- Next lesson bit here -->
					@include('layouts.sidebar.person_buttons')
<!-- Badges bit here -->					
				@elseif ($topic->kind_of() == 'Course')
<!-- Come back to this bit once course controller/model in place -->
					@include('layouts.sidebar.course_buttons')
				@endif	
				<div id="sidebar-accordion" class="panel-group">
					@if (($topic->kind_of() == 'Person') && (!$topic->staff))
						@include('layouts.sidebar.personal_details')
					@endif
					@include('layouts.sidebar.timeline_links')
					@include('layouts.sidebar.moodle_links')
					@include('layouts.sidebar.custom_links')
				</div>			
			</div>
		@endif
			<div id="main-content" class="col-xs-12 col-lg-9 col-md-8">
				@yield('content')
			</div>
		</div>

		
	</div>
	<script type="text/javascript" src="{{ URL::asset('js/scripts.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/cloud.js') }}"></script>	
</body>
</html>