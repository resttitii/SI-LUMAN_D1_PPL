<?php
    $title = 'Email Confirm';
    $id_page = 'auth';
?>

<?php $__env->startSection('content'); ?>

    <div class="container-fluid">
        <div class="row mx-2 justify-content-center align-items-start">
            <form class="col-xl-4 p-4 mb-5 position-relative rounded" style="top: 50px; background: #fff" action="<?php echo e(route('password.email')); ?>" method="POST">
            <?php echo csrf_field(); ?>
                <div>
                    <h5 class="text-start">
                        <strong>Lupa Password</strong>
                    </h5>

                    <p style="font-size: 13px" class="text-secondary">
                        Masukkan email yang terdaftar, lalu masuk ke kotak masuk/spam email untuk mendapatkan link reset password
                    </p>

                    <div class="mt-3">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" placeholder="example@gmail.com" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" style="font-size: 14px; height: 55px; border: 1px solid #ddd;">
                        <?php $__errorArgs = ['email'];
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

                    <button class="btn btn-dark py-2 px-4 mt-3 text-light" style="width: 100%;">
                        <strong>Selanjutnya</strong>
                    </button>
                    <p class="text-center">
                        <a href="<?php echo e(route('login')); ?>" class="text-center text-secondary" style="text-decoration: underline">
                            Kembali
                        </a>
                    </p>
                </div>
            </form>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Asus\Downloads\si-luman\si-luman\resources\views/auth/passwords/email.blade.php ENDPATH**/ ?>