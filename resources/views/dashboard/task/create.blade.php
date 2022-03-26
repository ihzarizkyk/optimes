@extends("dashboard.layout.app")
@section("title","Dashboard - Create Task Metlog")
@section("content")
	<div class="container">
		
		<!-- Buat card disini dengan isian form didalamnya dan inputannya: name, description-->

		<!-- start -->
		<div class="card mt-3">
  			<div class="card-body">
  				<form action="{{ route('task.store') }}" method="POST">
  					@csrf
    				<div class="mb-3">
    					<label for="Name" class="form-label"><b>Name</b></label>
    					<input type="text" class="form-control" name="name">
    				</div>
    				<div class="mb-3">
    					<label for="Description" class="form-label"><b>Description</b></label>
    					<textarea class="form-control" name="description"></textarea>
    				</div>
    				<input class="btn btn-md btn-success mb-2" type="submit" value="Create">
    			</form>
  			</div>
		</div>
		<!-- end -->

	</div>
@endsection
@section('script')

	<!-- taruh skrip datatable disini -->

@endsection