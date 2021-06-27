@extends('anonsec.index')

@section("konten")
<html>
	<body>
		<div class="container" style="margin-top:7em;">
			<center>
			<img src=" {{ Storage::url('public/ic/icon.png') }}" style="height:25em;">
			</center>
			<div class="card border-0 shadow">
				<div class="card-header">
					<h3> Welcome, {{ \Auth::user()->nickname }} [ {{ \Auth::user()->name }} ] </h3>
				</div>
				<div class="card-body">
					<h3>Dashboard</h3>
					<hr>
					<div class="row">
						<div class="col-md">
							<div class="card border-0 shadow cards" onclick="window.location.href = '{{ route('create') }}';">
								<div class="card-body">
									<h2> Create New Post </h2>
								</div>
							</div>
						</div>
						<div class="col-md">
							<div class="card border-0 shadow cards" onclick="window.location.href = '../posts';">
								<div class="card-body">
									<h2> My Post </h2>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
@endsection