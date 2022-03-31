@extends("dashboard.layout.app")
@section("title","Dashboard - Report Metlog")
@section("content")
	<div class="container">

		<!-- start -->

		<a href="{{ route('report.pdf')}}" class="btn btn-danger btn-md mb-3 mt-2">
			Print PDF
		</a>

		<!--Tabel-->
		<div class="row mt-5">
			<div class="col mb-2">
				<!-- <div class="table-responsive"> -->
					<table class="table table-striped" id="tables">
						<thead>
							<tr>
								<th>No</th>
								<th>Task</th>
								<th>Grade</th>
								<th>Grader</th>
								<th>Author</th>
								<th>Date</th>
								<th>Grade Date</th>
							</tr>
						</thead>
						<tbody>
							@foreach($task as $t)
							<tr>
								<td>{{ $loop->iteration }}</td>
								<td>{{ $t->name }}</td>
								<td>{{ $t->grade }}</td>
								<td>{{ $t->grader_name }}</td>
								<td>{{ $t->user->name }}</td>
								<td>{{ date('d F Y',strtotime($t->created_at))  ?? 'null' }}</td>
								<td>{{ date('d F Y',strtotime($t->updated_at)) ?? 'null' }}</td>
							</tr>
							@endforeach
						</tbody>
		<!--End Table-->


		<!-- end -->

	</div>

@endsection
@section('script')
	<!-- taruh skrip datatable disini -->
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

	<script>
		$(document).ready(function() {
		    $('#tables').DataTable();
		} );
	</script>
@endsection