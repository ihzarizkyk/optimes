@extends("dashboard.layout.app")
@section("title","Dashboard - Report Metlog")
@section("content")
	<div class="container">

		<!-- start -->

		<!--Tabel-->
		<div class="row mt-5">
			<div class="col mb-2">
				<!-- <div class="table-responsive"> -->
					<table class="table table-striped" id="usr">
						<thead>
							<tr>
								<th>No</th>
								<th>Name</th>
								<th>Role</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($user as $usr)
							<tr>
								<td>{{ $loop->iteration }}</td>
								<td>{{ $usr->name }}
									<a href="/dashboard/user/{{$usr->id}}/admin" class="badge bg-warning px-2 py-2">admin</a>
									<a href="/dashboard/user/{{$usr->id}}/employee" class="badge bg-dark px-2 py-2">employee</a>
									<a href="/dashboard/user/{{$usr->id}}/manager" class="badge bg-info px-2 py-2">manager</a>
								</td>
								<td>{{ $usr->role }}</td>
								<td>
									<a href="/dashboard/user/{id}/delete" class="btn btn-sm btn-danger">
										Delete
									</a>
								</td>
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
		    $('#usr').DataTable();
		} );
	</script>
@endsection