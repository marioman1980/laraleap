<!-- TEMPLATE INCOMPLETE -->

@if ($user->admin)
	<li class="dropdown">
		<button class="btn navbar-btn btn-default dropdown-toggle" data-toggle="dropdown">Admin <i class="fa fa-caret-down"></i></button>
		<ul class="dropdown-menu">
			<li class="dropdown-header">Settings</li>
			<li><a href="{{ url('/admin/settings') }}"><i class="fa fa-cog fa-fw"></i>Edit Settings</a></li>
			<li><a href="{{ url('/admin/views') }}"><i class="fa fa-th-list fa-fw"></i>Setup Views</a></li>
			<li><a href="{{ url('admin/stats') }}"><i class="fa fa-bar-chart-o fa-fw"></i>Statistics</a></li>
			<li class="divider"></li>
			<li class="dropdown-header">Data for {{ $topic->full_name }}</li>
			<li>
			<a href="{{ url()->current().'?refresh=true' }}">
				<i class="fa fa-refresh fa-fw"></i>
				Refresh from MIS
			</a></li>
		</ul>
	</li>		
@endif

<!-- TEMPLATE INCOMPLETE -->