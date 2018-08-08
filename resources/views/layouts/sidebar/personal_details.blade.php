<!-- TEMPLATE INCOMPLETE -->

<div class="panel panel-default">
	<div class="panel-heading">
		<h4 class="panel-title">
			<a href="#personal-details" data-toggle="collapse" data-parent="#sidebar-accordion">
				<i class="fa fa-fw fa-user"></i> Personal Details
			</a>
		</h4>
	</div>
	<div id="personal-details" class="panel-collapse collapse">
		<div class="panel-body no-padding">
			<dl id="sidebar-section" class="no-margin">
				<dt class="menu-spacing-top">Address</dt>
				<dd class="menu-spacing-bottom">{{ $topic->full_address() }}</dd>
				@if ($topic->home_phone)
					<hr>
					<dt class="menu-spacing-top">Home Phone</dt>
					<dd class="menu-spacing-bottom">{{ $topic->home_phone }}</dd>
				@endif
				@if ($topic->mobile_number)
					<hr>
					<dt class="menu-spacing-top">Mobile Phone</dt>
					<dd class="menu-spacing-bottom">{{ $topic->mobile_number }}</dd>
					@endif
				@if ($topic->personal_email)
					<hr>
					<dt class="menu-spacing-top">Personal Email</dt>
					<dd class="menu-spacing-bottom">
						<a href="mailto:{{ $topic->personal_email }}">{{ $topic->personal_email }}</a>
					</dd>
				@endif	
				@if ($topic->date_of_birth)
					<hr>
					<dt class="menu-spacing-top">Date of Birth</dt>
					<dd class="menu-spacing-bottom">
						{{ date('d F Y', strtotime($topic->date_of_birth)) }} (Age: {{ $topic->age() }})
					</dd>					
				@endif	
				@if ($topic->next_of_kin)
					<hr>
					<dt class="menu-spacing-top">Next of Kin</dt>
					<dd class="menu-spacing-bottom">{{ $topic->next_of_kin }}</dd>					
				@endif	
				@if ($topic->id == $user->id)
					<div class="text-right">
						Are your details incorrect?
						<a href="#" class="btn btn-info">Notify Us</a>
					</div>
				@endif						
			</dl>
		</div>
	</div>
</div>

<!-- TEMPLATE INCOMPLETE

# Notify us link

-->