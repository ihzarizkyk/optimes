<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{asset('css/sidebar.css')}}">
	<title>@yield('title')</title>
</head>
<body>

<div class="sidebar">
	<a class="active" id="#">Dashboard</a>
	<a id="#">Profile</a>
	<a id="#">Task</a>
	<a id="#">Report</a>
	<a id="#">Sign Out</a>
</div>	

	@yield('content')

</body>
</html>