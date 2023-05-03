

<?php $__env->startSection('content'); ?>

    <div class="container-fluid">
        <div class="row justify-content-center align-items-start mx-2">
            <form class="col-xl-5 p-4 mb-3 rounded" style="background: #fff; position: relative; top: 30px" action="<?php echo e(url('/update_profile/'.$user->user_id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
                <div> 
                    <div class="d-flex justify-content-between">
                        <div>
                            <a href="<?php echo e(url('/profile')); ?>" class="text-dark">
                                <i data-feather="arrow-left"></i>
                            </a>
                        </div>
                        <h5 class="text-center">
                            <strong>Edit Profile</strong>
                        </h5>
                        <div></div>
                    </div>
                    
                    <div class="mt-3">
                        <label for="name" style="font-size: 14px;">Nama</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Masukkan nama" value="<?php echo e($user->name); ?>" style="border-radius: 3px; font-size: 14px; border: 1px solid #ddd;">
                    </div>

                    <div class="mt-3">
                        <label for="username" style="font-size: 14px;">Username</label>
                        <input type="text" name="username" id="username" placeholder="Masukkan username" class="form-control" value="<?php echo e($user->username); ?>" style="border-radius: 3px; font-size: 14px; border: 1px solid #ddd;">
                    </div>

                    <div class="mt-3">
                        <label for="alamat" style="font-size: 14px">Alamat</label>
                        <textarea class="form-control" placeholder="Masukkan nama alamat" name="alamat" id="alamat" style="border-radius:3px; font-size: 14px;" rows="4"><?php echo e($user->alamat); ?></textarea>
                    </div>

                    <div class="mt-3">
                        <label for="no_hp" style="font-size: 14px">Nomor HP</label>
                        <input type="number" placeholder="Masukkan nomor HP" min="0" name="no_hp" id="no_hp" class="form-control" style="border-radius: 3px; font-size: 14px; border: 1px solid #ddd;" value="<?php echo e($user->no_hp); ?>">
                    </div>
                
                    <button class="btn btn-primary mt-4 px-3" style="font-size: 14px; height: 40px">
                        <strong>Update Profile</strong>
                    </button>
                </div>
            </form>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\si-luman\resources\views/edit_profile.blade.php ENDPATH**/ ?>