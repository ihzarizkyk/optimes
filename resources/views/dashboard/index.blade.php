@extends('dashboard.layout.app')
@section('title','Dashboard - Metlog')
@section('content')

<div class="container">

	<!-- bootstrap 5 -->

	<!-- Code here...-->

	<!-- use grid row column 3 with 3 card -->

	<!-- card use header and body -->
	<div class="row mt-3">
    	<div class="col">
      		<div class="card">
  				<div class="card-body">
    				<h1 class="card-title">Task</h1>
    				<h4 class="card-text">{{Auth::user()->task->count()}}</h4>
  				</div>
			</div>
    	</div>
    	<div class="col">
      		<div class="card">
  				<div class="card-body">
    				<h1 class="card-title">Report</h1>
    				<h4 class="card-text">0</h4>
  				</div>
			</div>
    	</div>
    	<div class="col">
      		<div class="card">
  				<div class="card-body">
    				<h1 class="card-title">Recently Grade</h1>
    				<h4 class="card-text">A</h4>
  				</div>
			</div>
   		</div>
  	</div>
	
</div>

@endsection