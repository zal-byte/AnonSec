<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Create New Post</title>
	<link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
</head>
<body>
	<nav class="navbar navbar-expand-md bg-dark">
		<a class="navbar-brand p-2" href="../">Kembali</a>
	</nav>
<div class="container mt-3">

		<form method="POST" action="{{ route('newPost') }}" enctype="multipart/form-data">
			@csrf
			<div class="row">
				<div class="col-md">
					<div class="card border-0 shadow">
					<div class="card-body">
					<div class="form-group">
						<label for="title" class="font-weight-bold">
							Judul
						</label>
						<input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" placeholder="Judul Postingan">

						@error('title')
						<div class="alert alert-danger mt-5">
							{{ $message }}
						</div>
						@enderror
					</div>

					<div class="form-group">
						<label for="content" class="font-weight-bold">
							Isi
						</label>
						<textarea id="content" class="form-control @error('content') is-invalid @enderror" name="content" placeholder="Isi Konten" rows="9"></textarea>

						@error('content')
						<div class="alert alert-danger mt-5">
							{{ $message }}
						</div>
						@enderror
					</div>


					<button type="submit" class="btn btn-outline-success">Posting</button>
					<button type="reset" class="btn btn-outline-warning">Reset</button>
				</div>
			</div>
				</div>
				<div class="col-md-2 mt-1">
					<div class="card shadow border-0">
						<div class="card-header">
							<strong> Add Tag </strong>
						</div>
						<div class="card-body">
							<div class="form-check">
								@php
								$tags = \DB::table('tag')->get();
								@endphp

								@forelse($tags as $tag)
								<input type="checkbox" name="{{ $tag->value }}" id="{{ $tag->value }}" class="form-check-input">
								<label for="{{ $tag->value }}" class="form-check-label">{{ $tag->value }} | {{ $tag->count }}</label>
								<br/>
								@empty
								<p> Belum ada label </p>
								@endforelse
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
</div>
<script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>
</body>
</html>