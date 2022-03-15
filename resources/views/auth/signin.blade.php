<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
	<title>Sign In - Metlog</title>
</head>
<body>

<div class="container-fluid bg-primary px-5 py-5 mb-4">
	
	<div class="row d-flex justify-center-content">
		<div class="col-md-7">
			<div class="card">
				<div class="card-body">
					<h2 class="fs-2 text-center">
						Sign In - Metlog
					</h2>
					<form action="/auth/postsignin" method="POST" class="form">
						@csrf
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
						<input type="submit" name="signIn" class="btn btn-primary mb-3" value="Sign In">
						<br>
						<p class="text-secondary">Don't have an account? <a href="/auth/signup">Sign Up</a></p>
					</form>
				</div>
			</div>
		</div>
	</div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>