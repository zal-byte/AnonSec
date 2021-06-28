<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>AnonSec Team | Post</title>
	<link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
</head>
<body>
<nav class="navbar navbar-expand-md bg-dark fixed-top">
	@guest
		<a class="navbar-brand p-3 text-white">AnonSec</a>
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<div class="form-inline">
					<a href="{{ route('login') }}" class="btn btn-outline-success"> Login </a>
					<a href="{{ route('register') }}" class="btn btn-outline-info"> Register </a>
				</div>
			</li>
		</ul>
	@else
	<a class="navbar-brand p-3 text-white" onclick="window.location.href = 'anonsec/home';">Kembali</a>
	@endguest
</nav>
<div>
	@yield('konten')
</div>
<script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
</body>
</html>