

<?php $__env->startSection('konten'); ?>
<html>
	<body>

		<div class="container" style="margin-top:10em;">
		<?php if(Session::has('success')): ?>
		<div class="alert alert-success">
			<?php echo e(Session::get('success')); ?>

		</div>
		<?php endif; ?>

		<div class="row">
			<div class="col-md">
				<?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $anon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
				<div class="card shadow border-0 mb-3">
					<div class="card-body">
						<h3 class="font-weight-bold"> <?php echo e($anon->title); ?> </h3>
						<hr>
						<?php echo $anon->content; ?>

					</div>
				</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
				<div class="alert alert-danger mt-5">
					<?php echo e(Session::get('errors')); ?>

				</div>
				<?php endif; ?>
    <div class="d-flex justify-content-center">
            <?php echo $posts->links(); ?>

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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('anonsec.posts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\AnonSec\resources\views/anonsec/posts/main.blade.php ENDPATH**/ ?>