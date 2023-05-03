

<?php $__env->startSection('content'); ?>

    <div class="container-fluid">
        <div class="row justify-content-center align-items-start mx-2">
            <div class="col-xl-5 p-4 mb-4 rounded" style="background: #fff; top: 40px; position: relative">
                <div>
                    <div class="d-flex justify-content-between">
                        <div></div>
                        <h5 class="text-center">
                            <strong>Profile</strong>
                        </h5>
                        <?php if(Auth::user()->role != 'admin'): ?>
                            <div>
                                <a href="<?php echo e(url('/edit_profile/'.auth()->user()->user_id)); ?>" class="text-dark">
                                    <i data-feather="edit"></i>
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="mt-3">
                        <label for="name" style="font-size: 14px;">Nama</label>
                        <input disabled class="form-control" value="<?php echo e(auth()->user()->name); ?>" style="border-radius: 3px; font-size: 14px; border: 1px solid #ddd;">
                    </div>

                    <div class="mt-3">
                        <label for="name" style="font-size: 14px;">Username</label>
                        <input disabled class="form-control" value="<?php echo e(auth()->user()->username); ?>" style="border-radius: 3px; font-size: 14px; border: 1px solid #ddd;">
                    </div>

                    <div class="mt-3">
                        <label for="alamat" style="font-size: 14px">Alamat</label>
                        <textarea disabled class="form-control" style="border-radius:3px; font-size: 14px;" rows="4"><?php echo e(auth()->user()->alamat); ?></textarea>
                    </div>

                    <div class="mt-3">
                        <label for="email" style="font-size: 14px;">Email</label>
                        <input disabled value="<?php echo e(auth()->user()->email); ?>" class="form-control" style="border-radius: 3px; font-size: 14px; border: 1px solid #ddd;">
                    </div>

                    <div class="mt-3">
                        <label for="no_hp" style="font-size: 14px">Nomor HP</label>
                        <input disabled class="form-control" style="border-radius: 3px; font-size: 14px; border: 1px solid #ddd;" value="<?php echo e(auth()->user()->no_hp); ?>">
                    </div>
             </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\si-luman\resources\views/profile.blade.php ENDPATH**/ ?>