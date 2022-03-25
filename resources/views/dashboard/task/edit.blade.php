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
    					<label for="Nama" class="form-label">Nama</label>
    					<input type="text" class="form-control">
    				</div>
    				<div class="from-group">
    					<label>Description</label>
    					<input type="text" class="form-control">
    				</div>
    				<div class="from-group">
    					<label>Author</label>
    					<input type="text" class="form-control">
    				</div>
    			</form>
  			</div>
		</div>

		<!-- end -->

	</div>
@endsection