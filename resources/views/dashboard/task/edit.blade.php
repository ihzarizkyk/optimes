@extends("dashboard.layout.app")
@section("title","Dashboard - Edit Task Metlog")
@section("content")
	<div class="container">
		
		<!-- Buat card disini dengan isian form didalamnya dan inputannya: Name, Description, Author-->

		<!-- start -->
		<div class="card">
  			<div class="card-body">
  				<form>
    				<div class="mb-3">
    					<label for="Name" class="form-label">Name</label>
    					<input type="text" class="form-control">
    				</div>
    				<div class="mb-3">
    					<label for="Description" class="form-label">Description</label>
    					<input type="text" class="form-control">
    				</div>
    				<div class="mb-3">
    					<label for="Author" class="form-label">Author</label>
    					<input type="text" class="form-control">
    				</div>
    			</form>
  			</div>
		</div>

		<!-- end -->

	</div>
@endsection