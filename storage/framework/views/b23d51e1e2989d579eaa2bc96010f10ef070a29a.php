<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="<?php echo e(mix('css/app.css')); ?>">
</head>
<body>
    <div class="container">
        <center>
            <img src="<?php echo e(Storage::url('public/ic/icon.png')); ?>" class="img-responsive" style="height:15em;">
        </center>
        <div class="col-md-4 offset-md-4 mt-5">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Register AnonSec Team</h3>
                </div>
                <form action="<?php echo e(route('register')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="card-body">
                    <?php if(session('errors')): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Something it's wrong:
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                    <div class="form-group">
                        <label for=""><strong>Nama Lengkap</strong></label>
                        <input type="text" name="name" class="form-control" placeholder="Nama Lengkap">
                    </div>
                    <div class="form-group">
                        <label for=""><strong>Nickname</strong></label>
                        <input type="text" name="nickname" class="form-control" placeholder="Nickname Andalanmu">
                    </div>
                    <div class="form-group">
                        <label for=""><strong>Password</strong></label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for=""><strong>Konfirmasi Password</strong></label>
                        <input type="password" name="password_confirmation" class="form-control" placeholder="Password">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                    <p class="text-center">Sudah punya akun? <a href="<?php echo e(route('login')); ?>">Login</a> sekarang!</p>
                </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="<?php echo e(mix('js/app.js')); ?>"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\laravel\AnonSec\resources\views/anonsec/auth/register.blade.php ENDPATH**/ ?>