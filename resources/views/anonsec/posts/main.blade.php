@extends('anonsec.posts.index')

@section('konten')
<html>
	<script type="text/javascript">
		
		function tags(value){
			window.location.href = 'posts/tags/'+value;
		}

	</script>
	<style>
	.zoom:hover{
		padding: 15px;
		transition: scale(1.5);
		cursor: pointer;
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
						<div class="card shadow border-0 mb-2 zoom" style="background-image:url({{ Storage::url('public/ic/party.jpg') }});background-size:cover; background-repeat:no-repeat; backgound-position:center;" onclick="window.location.href = 'posts/{{$anon->id}}';">
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
				
			</div>
			<div class="col-md">
				<div class="container-fluid">
					<div class="card">
						<div class="card-body">
							<strong> Label </strong>
							<hr>
							<!-- disini tag label -->
							@forelse($tags as $tag)
 								<a href="{{ route('tags',$tag->tag_identifier) }}"><button type="button" class="btn btn-primary m-1">{{ $tag->value }}<span class="badge">{{ $tag->count }}</span></button></a>
 							@empty
 								<span class="font-weight-bold"> Belum Ada Label </span>
							@endforelse
							<!-- End of tag label -->
						</div>	
					</div>
				</div>
			</div>
		</div>
		</div> 

	</body>
</html>
@endsection