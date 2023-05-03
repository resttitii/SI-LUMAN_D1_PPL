

<?php $__env->startSection('content'); ?>

    <div class="container-fluid">
        <div class="row justify-content-center align-items-start">
            <div class="col-xl-5 col-10 p-4 rounded mb-5 position-relative" style="background: #fff; top: 40px">
                <div>
                    <h5 class="text-center">
                        <strong>Upgrade Role</strong>
                    </h5>

                    <hr style="border: 1px solid #bbb">

                    <div class="mt-3">
                        <label for="name" style="font-size: 14px;">Role saat ini</label>
                        <input disabled class="form-control" value="<?php echo e(ucfirst(auth()->user()->role)); ?>" style="border-radius: 3px; font-size: 14px; border: 1px solid #ddd;">
                    </div>


                    <a href="mailto:infosiluman@gmail.com?subject=Upgrade%20Role">
                        <button class="btn text-light mt-4" style="width: 100%; height: 50px; background: #1e1c1c">
                            Send Email
                        </button>
                    </a>
                    
                    <p class="text-secondary mt-1" style="font-size: 12px">
                        NB: Pastikan upload berkas pendukung yang relevan dengan role yang ingin anda ajukan.
                    </p>

                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\si-luman\resources\views/upgrade_role.blade.php ENDPATH**/ ?>