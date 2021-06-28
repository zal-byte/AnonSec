@extends('anonsec.posts.index')

@section('konten')
<html>
	<body>

		<div class="container" style="margin-top:10em;">
		@if(Session::has('success'))
		<div class="alert alert-success">
			{{ Session::get('success') }}
		</div>
		@endif
		@forelse($posts as $anon)
			<div class="card border-0 shadow mb-2 col-md-5">
				<div class="card-body">
					<h3 class="font-weight-bold">
						{{ $anon->title }}
					</h3>
					<hr>
					<p>
						{!! $anon->content !!}
					</p>
				</div>
			</div>
		@empty
			<div class="alert alert-danger mt-5">
				<strong> Tidak ada postingan </strong>
			</div>
		@endforelse
		</div> 
	</body>
</html>
@endsection