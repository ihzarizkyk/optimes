<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="{{asset('image/logo/fullfill64.png')}}">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
	<link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
	<title>@yield('title')</title>
</head>
<body>

@yield('sidebar')
<div class="sidebar">
	<a class="{{ Request::is('/dashboard/*') ? 'active' : '' }}" href="/dashboard">Dashboard</a>
	<a class="{{ Request::is('/dashboard/profile/*') ? 'active' : '' }}" href="/dashboard/profile">Profile</a>
	<a class="{{ Request::is('/dashboard/task/*') ? 'active' : '' }}" href="/dashboard/task">Task</a>
	<a href="#">Report</a>
	<a class="{{ Request::is('/auth/signout') ? 'active' : '' }}"href="/auth/signout">Sign Out</a>
</div>

<div class="content">
	@yield('content')
</div>

@yield('script')
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 -->
	<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
</body>
</html>