@extends("dashboard.layout.app")
@section("title","Dashboard - Edit Task Metlog")
@section("content")
	<div class="container">
		
		<!-- Buat card disini dengan isian form didalamnya dan inputannya: name, description-->

		<!-- start -->
		<div class="card mt-3">
  			<div class="card-body">
  				<form action="{{ route('task.update') }}" method="POST">
  					@csrf
  					<input type="hidden" name="id" value="{{$task->id}}">
    				<div class="mb-3">
    					<label for="Name" class="form-label"><b>Name</b></label>
    					<input type="text" class="form-control" name="name" value="{{$task->name}}">
    				</div>
    				<div class="mb-3">
    					<label for="Description" class="form-label"><b>Description</b></label>
    					<textarea class="form-control" name="description">{{$task->description}}</textarea>
    				</div>
    				<input class="btn btn-md btn-success mb-2" type="submit" value="Update">
    				<a href="/dashboard/task" class="btn btn-md btn-danger mb-2">Cancel</a>
    			</form>
  			</div>
		</div>
		<!-- end -->

	</div>
@endsection