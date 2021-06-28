<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?php echo e(mix('css/app.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/my.css')); ?>">
	<title>AnonSec Team</title>
</head>
<body>
	<nav class="navbar navbar-expand-md bg-dark fixed-top p-2">
		<div class="form-inline">
			<img src="<?php echo e(Storage::url('public/ic/icon.png')); ?>" style="height:5em;">
		<a class="navbar-brand">AnonSec Team</a>

		</div>
		<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#mainNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
		<div class="collapse navbar-collapse" id="mainNav">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link btn btn-outline-warning" href="<?php echo e(route('logout')); ?>">
						Logout
					</a>
				</li>
			</ul>
		</div>
	</nav>
	<div>
		<?php echo $__env->yieldContent('konten'); ?>
	</div>
<script type="text/javascript" src="<?php echo e(mix('js/app.js')); ?>"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\laravel\AnonSec\resources\views/anonsec/index.blade.php ENDPATH**/ ?>