@extends('dashboard.layout.app')
@section('title','Dashboard - Profile')
@section('content')

<div class="container">
	<!-- Code here...-->

	<!-- using card element bootstrap 5 -->

	<!-- in card using h1 and h4 element bootstrap 5 -->	

	<div class="card mt-3 mb-2">
  		<div class="card-body">
    		<h1 class="card-title"><b>Profile:</b> {{Auth::user()->name}}</h1>
    		<h4 class="card-text"><b>Username:</b>{{Auth::user()->username}}</h4>
    		<h4><b>Role:</b>{{Auth::user()->role}}</h4>
  		</div>
	</div>
</div>

@endsection