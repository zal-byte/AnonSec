

<?php $__env->startSection('konten'); ?>
<html>
	<body>

		<div class="container" style="margin-top:10em;">
		<?php if(Session::has('success')): ?>
		<div class="alert alert-success">
			<?php echo e(Session::get('success')); ?>

		</div>
		<?php endif; ?>
		<?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $anon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
			<div class="card border-0 shadow mb-2 col-md-5">
				<div class="card-body">
					<h3 class="font-weight-bold">
						<?php echo e($anon->title); ?>

					</h3>
					<hr>
					<p>
						<?php echo $anon->content; ?>

					</p>
				</div>
			</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
			<div class="alert alert-danger mt-5">
				<strong> Tidak ada postingan </strong>
			</div>
		<?php endif; ?>
		</div> 
	</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('anonsec.posts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\AnonSec\resources\views/anonsec/posts/main.blade.php ENDPATH**/ ?>