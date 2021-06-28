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

		<div class="row">
			<div class="col-md">
				@forelse($posts as $anon)
				<div class="card shadow border-0 mb-3">
					<div class="card-body">
						<h3 class="font-weight-bold"> {{ $anon->title }} </h3>
						<hr>
						{!! $anon->content !!}
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