@extends('dashboard.layout.app')
@section('title','Dashboard - Metlog')
@section('content')

<div class="container">

	<!-- bootstrap 5 -->

	<!-- Code here...-->

	<!-- use grid row column 3 with 3 card -->

	<!-- card use header and body -->
	<div class="row">
    	<div class="col">
      	<div class="card" style="width: 26rem;">
  		<div class="card-body">
    		<h1 class="card-title">Card 1</h1>
    		<h4 class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</h4>
  		</div>
	</div>
    	</div>
    		<div class="col">
      			<div class="card" style="width: 26rem;">
  		<div class="card-body">
    		<h1 class="card-title">Card 2</h1>
    		<h4 class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</h4>
  		</div>
	</div>
    		</div>
    	<div class="col">
      		<div class="card" style="width: 26rem;">
  		<div class="card-body">
    		<h1 class="card-title">Card 3</h1>
    		<h4 class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</h4>
  		</div>
	</div>
   		</div>
  	</div>
</div>

@endsection