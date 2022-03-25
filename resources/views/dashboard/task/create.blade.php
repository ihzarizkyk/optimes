@extends("dashboard.layout.app")
@section("title","Dashboard - Create Task Metlog")
@section("content")
	<div class="container">
		
		<!-- Buat card disini dengan isian form didalamnya dan inputannya: name, description-->

		<!-- start -->
		<div class="card">
  			<div class="card-body">
  				<form>
    				<div class="mb-3">
    					<label for="Name" class="form-label">Name</label>
    					<input type="text" class="form-control">
    				</div>
    				<div class="mb-3">
    					<label>Description</label>
    					<input type="text" class="form-control">
    				</div>
    			</form>
  			</div>
		</div>
		<!-- end -->

	</div>
@endsection
@section('script')

	<!-- taruh skrip datatable disini -->

@endsection