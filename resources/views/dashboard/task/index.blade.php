@extends("dashboard.layout.app")
@section("title","Dashboard - Task Metlog")
@section("content")
	<div class="container">

	<a href="{{route('task.new')}}" class="btn btn-success mt-2">
		Add Task
	</a>		
		<!-- start -->
		<!--Tabel-->
		<div class="row mt-5">
			<div class="col">
				<!-- <div class="table-responsive"> -->
					<table class="table table-striped" id="task">
						<thead>
							<tr>
								<th>No</th>
								<th>Task</th>
								<th>Author</th>
								<th>Date</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@if(Auth::user()->role == "admin")
							@foreach($tasks as $tks)
							<tr>
								<td>{{ $loop->iteration }}</td>
								<td>{{ $tks->name }}</td>
								<td>{{ $tks->user->name }}</td>
								<td>{{ $tks->created_at ?? 'null' }}</td>
								<td>
									<a href="/dashboard/task/{{$tks->id}}/edit" class="btn btn-warning">Edit</a>
									<a href="/dashboard/task/{{$tks->id}}/delete" class="btn btn-danger">Delete</a>
								</td>
							</tr>
							@endforeach
							@elseif(Auth::user()->role == "employee")
							@foreach($task as $ts)
							<tr>
								<td>{{ $loop->iteration }}</td>
								<td>{{ $ts->name }}</td>
								<td>{{ $ts->user->name }}</td>
								<td>{{ $ts->created_at ?? 'null' }}</td>
								<td>
									<a href="/dashboard/task/{{$ts->id}}/edit" class="btn btn-warning">Edit</a>
									<a href="/dashboard/task/{{$ts->id}}/delete" class="btn btn-danger">Delete</a>
								</td>
							</tr>
							@endforeach
							@endif
						</tbody>
					</table>
				<!-- </div> -->
			</div>
		</div>
		<!--End Table-->


		<!-- end -->

	</div>

@endsection
@section('script')
	<!-- taruh skrip datatable disini -->
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

	<script>
		$(document).ready(function() {
		    $('#task').DataTable();
		} );
	</script>
@endsection