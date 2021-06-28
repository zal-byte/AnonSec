<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>AnonSec Team | Post</title>
	<link rel="stylesheet" type="text/css" href="<?php echo e(mix('css/app.css')); ?>">
</head>
<body>
<nav class="navbar navbar-expand-md bg-dark fixed-top">
	<?php if(auth()->guard()->guest()): ?>
		<a class="navbar-brand p-3 text-white">AnonSec</a>
	<?php else: ?>
	<a class="navbar-brand p-3 text-white" onclick="window.location.href = 'anonsec/home';">Kembali</a>
	<?php endif; ?>
</nav>
<div>
	<?php echo $__env->yieldContent('konten'); ?>
</div>
<script type="text/javascript" src="<?php echo e(mix('js/app.js')); ?>"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\laravel\AnonSec\resources\views/anonsec/posts/index.blade.php ENDPATH**/ ?>