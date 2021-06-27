<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Create New Post</title>
	<link rel="stylesheet" type="text/css" href="<?php echo e(mix('css/app.css')); ?>">
</head>
<body>
<div class="container">
	<div class="col-md-8 offset-md mt-5">
	<div class="card border-0 shadow">
		<div class="card-body">
			<div class="form-group">
				<label for="title" class="font-weight-bold">
					Judul
				</label>
				<input type="text" class="form-control <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="title" id="title" placeholder="Judul Postingan">

				<?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
				<div class="alert alert-danger mt-5">
					<?php echo e($message); ?>

				</div>
				<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
			</div>

			<div class="form-group">
				<label for="content" class="font-weight-bold">
					Isi
				</label>
				<textarea id="content" class="form-control <?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="content" placeholder="Isi Konten" rows="5"></textarea>

				<?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
				<div class="alert alert-danger mt-5">
					<?php echo e($message); ?>

				</div>
				<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
			</div>

		</div>
	</div>
</div>
<script type="text/javascript" src="<?php echo e(mix('js/app.js')); ?>"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\laravel\AnonSec\resources\views/anonsec/posts/create.blade.php ENDPATH**/ ?>