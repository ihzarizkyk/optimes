@extends("dashboard.layout.app")
@section("title","Dashboard - Grade Task Metlog")
@section("content")
	<div class="container">
		
		<!-- Buat card disini dengan isian form didalamnya dan inputannya: name, description-->

		<!-- start -->
		<div class="card mt-3">
  			<div class="card-body">
  				<form action="{{ route('task.grade',$task->id) }}" method="POST">
  					@csrf
    				<div class="mb-3">
    					<label for="Name" class="form-label"><b>Name</b></label>
    					<input type="text" class="form-control" value="{{$task->name}}" disabled>
    				</div>
    				<div class="mb-3">
    					<label for="Description" class="form-label"><b>Description</b></label>
    					<textarea class="form-control" disabled>{{$task->description}}</textarea>
    				</div>
    				<div class="mb-3">
    					<label for="grade" class="form-label">
    						<b>Grade</b>
    					</label>
    					<input type="number" name="grade" value="{{$task->grade}}">
    				</div>
    				<input class="btn btn-md btn-success mb-2" type="submit" value="Grade">
    				<a href="/dashboard/task" class="btn btn-md btn-danger mb-2">Cancel</a>
    			</form>
  			</div>
		</div>
		<!-- end -->

	</div>
@endsection