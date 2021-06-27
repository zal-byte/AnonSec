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
	@else
	<a class="navbar-brand p-3 text-white" onclick="window.location.href = 'anonsec/home';">Kembali</a>
	@endguest
</nav>
<script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
</body>
</html>