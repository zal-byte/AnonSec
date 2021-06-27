@extends('anonsec.posts.index')

@section('konten')
<html>
	<body>
		<div class="container" style="margin-top:10em;">
		@php
		echo "<pre>";
			print_r($post->get());
		echo "</pre>";
		@endphp
		</div> 
	</body>
</html>
@endsection