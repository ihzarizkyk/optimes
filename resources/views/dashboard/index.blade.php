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
    		<h4 class="card-text">0</h4>
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
	
	<!--Tabel-->
	<div class="row mt-5">
		<div class="col">
			<div class="table-responsive">
				<table class="table table-hover">
					<thead class="bg-dark text-white">
						<tr>
							<th>No</th>
							<th>Task</th>
							<th>Author</th>
							<th>Status</th>
							<th>Grade</th>
							<th>Date</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Print document</td>
							<td>Mr Agus</td>
							<td>On Progress</td>
							<td>70</td>
							<td>25 Maret 2022</td>
							<td>
								<a href="http://" class="btn btn-warning">Edit</a>
								<a href="http://" class="btn btn-danger">Delete</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<!--End Table-->
</div>

@endsection