<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="{{asset('image/logo/fullfill64.png')}}">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
	<title>Sign In - Metlog</title>
	<style>
		.bg_img{
		margin: 0;
		background-image: url('{{ asset('image/signin.jpg') }}');
		background-repeat: no-repeat;
		background-size: cover;
		height: 100vh;
		position: relative;
		}
		.logo{
			width: 40px;
			height : auto;
		}
	</style>
</head>
<body>

<div class="d-lg-flex half">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-12 col-sm-12">
				<div class="row align-items-center justify-content-center no-gutters">
					<div class="col-sm-6 mr-5">
						<img src="{{asset('image/logo/fullfill64.png')}}" class="logo" alt="logo">
						<h2>Sign In</h2>
						<p class="mb-5">Selamat datang kembali, silahkan login terlebih dahulu</p>
						<form action="/auth/postsignin" method="POST" class="form">
						@csrf
							<div class="form-group mb-2">
								<label for="username">Username</label>
								<input type="text" name="username" class="form-control" placeholder="cth. john123">
								<small id="emailHelp" class="form-text text-muted">Data yang dimasukan tidak akan disebarluaskan</small>
							</div>
							<div class="form-group mb-5">
								<label for="password">Password</label>
								<input type="password" name="password" class="form-control" placeholder="password">
							</div>
							<input type="submit" name="signIn" class="btn btn-primary mb-3" value="Masuk">
							<a href="/" class="btn btn-outline-danger mb-3">Kembali</a>
							<p class="text-secondary">Belum punya akun? <a href="/auth/signup">Daftar dulu</a></p>	
						</form>
					</div>
					<div class="col-md-5 d-none d-lg-inline-block">
                        <div class="bg_img rounded-right" alt="">
                    </div>
				</div>
			</div>
		</div>
	</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>