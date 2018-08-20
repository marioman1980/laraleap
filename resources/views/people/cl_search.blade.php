@extends('app')

@section('content')
<div class="col-md-4 col-lg-6 searchy">
	<div class="row">
		<h1>
			People
			<span class="visible-sm visible-xs pull-right">
				<a href="#courses" class="btn btn-default btn-md">Skip to courses<i class="fa fa-arrow-down"></i></a>
			</span>
		</h1>
		<% if @people.any? %>
			<div class="row">
		<%= render :partial => "cl_person", :collection => @people %>
			</div>
		<% else %>
		<div class="alert alert-warning">
		<i class="fa fa-warning"></i>
		Couldn't find any people matching that search.
		</div>
		<% end %>
		<% unless params[:mis] %>
		  <div class="col-xs-12 col-sm-4 col-md-12 col-lg-6">
		    <div class="alert alert-warning">
		      <b>Not found who you're looking for?</b>
		      <p>
		        <%= link_to(params.reverse_merge(:mis => true),:class => "btn btn-default") do %>
		          <i class="fa fa-search"></i>
		          Search Full MIS
		        <% end %>
		      </p>
		      <p>Note: This may take some time.</p>
		    </div>
		  </div>
		<% end %>
	</div>
</div>
<div class="col-md-8 col-lg-6 searchy" id="courses">
  <h1>Courses</h1>
  <% if @courses.any? %>
    <div class="panel span-xs-12">
      <div class="panel-body">
        <table class="table">
          <%= render :partial => "cl_course", :collection => @courses %>
        </table>
        <div class="pull-right">
          Course not here? 
          <%= link_to(params.reverse_merge(:mis => true),:class => "btn btn-default btn-small") do %>
            <i class="fa fa-search"></i>
            Search Full MIS
          <% end %>
        </div>
      </div>
    </div>
  <% else %>
    <div class="alert alert-warning">
      <i class="fa fa-warning"></i>
      Couldn't find any courses matching that search.
    </div>
  <% end %>
</div>
@endsection
