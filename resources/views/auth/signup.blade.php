<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="{{asset('image/logo/fullfill64.png')}}">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
	<title>Sign Up - Metlog</title>
</head>
<body>

<div class="container-fluid bg-primary px-5 py-5 mb-4">
	
	<div class="row d-flex justify-center-content">
		<div class="col-md-7">
			<div class="card">
				<div class="card-body">
					<h2 class="fs-2 text-center">
						Sign Up - Metlog
					</h2>
					<div class="text-center mb-3">
						<img src="{{asset('image/logo/fullfill64.png')}}" alt="logo">
					</div>
					<form action="/auth/postsignup" method="POST" class="form">
						@csrf
						<div class="mb-3">
							<label for="name">
								<b>Name</b>
							</label>
							<br>
							<input type="text" name="name" class="form-control">
						</div>
						<div class="mb-3">
							<label for="email">
								<b>Email</b>
							</label>
							<br>
							<input type="text" name="email" class="form-control">
						</div>
						<div class="mb-3">
							<label for="username">
								<b>Username</b>
							</label>
							<br>
							<input type="text" name="username" class="form-control">
						</div>
						<div class="mb-3">
							<label for="password">
								<b>Password</b>
							</label>
							<br>
							<input type="password" name="password" class="form-control">
						</div>
						<input type="submit" name="signIn" class="btn btn-primary mb-3" value="Sign Up">
						<a href="/" class="btn btn-danger mb-3">Back</a>
						<br>
						<p class="text-secondary">Already have an account? <a href="/auth/signin">Sign In</a></p>
					</form>
				</div>
			</div>
		</div>
	</div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>