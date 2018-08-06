<div class="container nrp">
	<nav class="navbar navbar-default">
		<div class="navbar-header">
			<button class="navbar-toggle" data-target="#navbar-collapse" data-toggle="collapse">
				<i class="fa fa-bars"></i>
			</button>
			<a href="#leap-about-modal" data-toggle="modal"><img alt="Leap-logo" class="navbar-brand" src="{{URL::asset('img/leap-logo.png')}}"></a>
		</div>
		<div class="collapse navbar-collapse" id="navbar-collapse">
			@if ($user->staff)
				@include('layouts.top_bar._search')
			@endif
			<ul class="nav navbar-nav">
				@include('layouts.top_bar._admin_menu')
			</ul>
			<button class="navbar-btn btn btn-default navbar-right visible-sm" id="show-clidebar">
				<i class="fa fa-bars"></i>
			</button>
			<p class="navbar-text navbar-right">
				<span class="hidden-sm">
				Logged in as
				</span>
				<a href="/people/<?= $user->mis_id; ?>" class="navbar-link"><?= $user->full_name; ?></a>
			</p>
		</div>			
			
