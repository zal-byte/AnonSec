@extends('anonsec.posts.index')

@section('konten')
<html>
	<style>
	.zoom:hover{
		padding: 15px;
		transition: scale(1.5);
	}

	</style>
	<body>

		<div class="container" style="margin-top:10em;">
		@if(Session::has('success'))
		<div class="alert alert-success">
			{{ Session::get('success') }}
		</div>
		@endif

		<div class="row">
			<div class="col-md">
				@forelse($posts as $anon)
						<div class="card shadow border-0 mb-2 zoom" style="background-image:url({{ Storage::url('public/ic/party.jpg') }});background-size:cover; background-repeat:no-repeat; backgound-position:center;">
							<div class="card-body">
								<h2 class="font-weight-bold text-white">
									{{ $anon->title }}
								</h2>
								<hr class="text-white">
								<div class="form-inline">
									<span class="text-white"> {{ $anon->date }}</span>
									<span class="text-white"> | </span>
									<span class="text-white"> {{ $anon->nickname }} </span>
								</div>
							</div>
						</div>
				@empty
				<div class="alert alert-danger mt-5">
					Belum Ada Postingan
				</div>
				@endforelse
    <div class="d-flex justify-content-center">
            {!! $posts->links() !!}
        </div>
			</div>
			<div class="col-md">
				<div class="container-fluid">
					<div class="card">
						<div class="card-body">
							<ul>
								<li>
									Category
								</li>
								<li>
									Sub Category
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div> 

	</body>
</html>
@endsection