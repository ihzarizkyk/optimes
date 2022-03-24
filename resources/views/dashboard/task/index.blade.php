@extends("dashboard.layout.app")
@section("title","Dashboard - Task Metlog")
@section("content")
	<div class="container">
		<!-- start -->
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
									<a href="#" class="btn btn-warning">Edit</a>
									<a href="#" class="btn btn-danger">Delete</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<!--End Table-->


		<!-- end -->

	</div>
@endsection
@section('script')

	<!-- taruh skrip datatable disini -->

@endsection