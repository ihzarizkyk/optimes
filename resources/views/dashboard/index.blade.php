@extends('dashboard.layout.app')
@section('title','Dashboard - Metlog')
@section('content')

<div class="container">

	<!-- bootstrap 5 -->

	<!-- Code here...-->

	<!-- use grid row column 3 with 3 card -->

	<!-- card use header and body -->
	<div class="row mt-3">
    	<div class="col mb-2">
      		<div class="card">
  				<div class="card-body">
    				<h1 class="card-title">Task</h1>
    				<h4 class="card-text">@if($taskCount->count() == 0)
    				0
    				@else
    				{{$taskCount->count()}}
    				@endif
    				</h4>
  				</div>
			</div>
    	</div>
    	<div class="col mb-2">
      		<div class="card">
  				<div class="card-body">
    				<h1 class="card-title">Recently Score</h1>
    				<h4 class="card-text">{{$score}}</h4>
  				</div>
			</div>
   		</div>

    	<div class="col mb-2">
      		<div class="card">
  				<div class="card-body">
    				<h1 class="card-title">Recently Grade</h1>
    				<h4 class="card-text">
    					@if(($score / $taskCount->count()))
    					A
    					@elseif(($score / $taskCount->count()) <= $score)
    					B
    					@elseif(($score / $taskCount->count()) < $score)
    					C
    					@endif
    				</h4>
  				</div>
			</div>
   		</div>
  	</div>
	
</div>

@endsection