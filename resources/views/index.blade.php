<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="{{asset('image/logo/fullfill64.png')}}">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
	<link rel="stylesheet" href="{{ asset('css/home.css') }}">
	<title>Metlog</title>
</head>
<body>

<div class="container-100%">
<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold" href="#">Metlog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link active" href="#">About</a>
        <a class="nav-link active" href="/auth/signin">Sign In</a>
      </div>
    </div>
  </div>
</nav>
</div>

<div class="container-100%">
	<div class="row mb-3" id="jumbotron">
		<div class="col-12 d-flex justify-content-center px-4 py-5">
			<h2 class="fs-2 mb-2 fw-bold">
				Metlog for measure employee performance
			</h2>
			<br>

		</div>

		<div class="d-flex justify-content-center">
			<a href="#" class="btn btn-light mb-3">
				Learn More
			</a>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-4 text-center">
			<div class="card">
				<div class="card-body">
					<h1 class="fs-1">
						<i class="bi bi-list-task"></i>
					</h1>
					<h3>Assign Task</h3>
				</div>
			</div>
		</div>
		<div class="col-4 text-center">
			<div class="card">
				<div class="card-body">
					<h1 class="fs-1">
						<i class="bi bi-clipboard-pulse"></i>
					</h1>
					<h3>Grade and Analyze Task</h3>
				</div>
			</div>
		</div>
		<div class="col-4 text-center">
			<div class="card">
				<div class="card-body">
					<h1 class="fs-1">
						<i class="bi bi-file-text-fill"></i>
					</h1>
					<h3>Reporting from analyze</h3>
				</div>
			</div>
		</div>
	</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>