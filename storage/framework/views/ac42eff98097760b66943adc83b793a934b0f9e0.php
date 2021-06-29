

<?php $__env->startSection('konten'); ?>
<html>
	<style>
	.zoom:hover{
		padding: 15px;
		transition: scale(1.5);
		cursor: pointer;
	}

	</style>
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
						<div class="card shadow border-0 mb-2 zoom" style="background-image:url(<?php echo e(Storage::url('public/ic/party.jpg')); ?>);background-size:cover; background-repeat:no-repeat; backgound-position:center;" onclick="window.location.href=<?php echo e(Route('view', $anon->id)); ?>">
							<div class="card-body">
								<h2 class="font-weight-bold text-white">
									<?php echo e($anon->title); ?>

								</h2>
								<hr class="text-white">
								<div class="form-inline">
									<span class="text-white"> <?php echo e($anon->date); ?></span>
									<span class="text-white"> | </span>
									<span class="text-white"> <?php echo e($anon->nickname); ?> </span>
								</div>
							</div>
						</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
				<div class="alert alert-danger mt-5">
					Belum Ada Postingan
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
							<strong> Label </strong>
							<hr>
							<!-- disini tag label -->
							<?php $__empty_1 = true; $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
 								<button type="button" class="btn btn-primary m-1"><?php echo e($tag->value); ?><span class="badge"><?php echo e($tag->count); ?></span></button> 
 							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
 								<span class="font-weight-bold"> Belum Ada Label </span>
							<?php endif; ?>
							<!-- End of tag label -->
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