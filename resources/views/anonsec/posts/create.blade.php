<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Create New Post</title>
	<link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
</head>
<body>
<div class="container">
		<form method="POST" action="{{ route('newPost') }}" enctype="multipart/form-data">
			@csrf
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
				<textarea id="content" class="form-control @error('content') is-invalid @enderror" name="content" placeholder="Isi Konten" rows="5"></textarea>

				@error('content')
				<div class="alert alert-danger mt-5">
					{{ $message }}
				</div>
				@enderror
			</div>

			<div class="custom-file mt-3 mb-3">
				<input type="file" class="custom-file-input" name="upload[]" multiple="multiple" required="true" id="customfile">
				<label for="customfile" class="custom-file-label">
					Choose File
				</label>
			</div>
			<button type="submit" class="btn btn-outline-success">Success</button>
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