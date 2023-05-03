<?php
    $title = 'Login';
    $id_page = 'auth';
?>

<?php $__env->startSection('content'); ?>

    <div class="container-fluid">
        <div class="row mx-2 justify-content-center align-items-start">
            <form class="col-xl-4 p-4 mb-5 position-relative rounded" style="top: 50px; background: #fff" action="<?php echo e(route('login')); ?>" method="POST">
            <?php echo csrf_field(); ?>
                <div>
                    <h5 class="text-center">
                        <strong>Selamat Datang</strong>
                    </h5>

                    <div class="mt-3">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" placeholder="John Doe" class="form-control <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" style="font-size: 14px; height: 55px; border: 1px solid #ddd;">
                        <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger" style="font-size: 13px">
                            <?php echo e($message); ?>

                        </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="mt-3">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="Masukkan password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" style="font-size: 14px; height: 55px; border: 1px solid #ddd;">
                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger" style="font-size: 13px">
                            <?php echo e($message); ?>

                        </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <p class="text-end" style="font-size: 14px">
                            <a href="<?php echo e(route('password.request')); ?>" style="text-decoration: none">
                                Lupa Password?
                            </a>
                        </p>
                    </div>

                    <button class="btn py-2 px-4 mt-3 text-light" style="width: 100%; background: #c19a79">
                        <strong>Masuk</strong>
                    </button>
                    <p class="text-center mb-0 mt-2" style="font-size: 13px">Belum punya akun? <a href="<?php echo e(route('register')); ?>">Daftar disini.</a></p>
                </div>
            </form>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\si-luman\resources\views/auth/login.blade.php ENDPATH**/ ?>