

<?php $__env->startSection('content'); ?>
<div class="container-fluid" style="margin-bottom: 5em"> 
    <div class="row justify-content-center align-items-center mt-4" style="font-size: 14px">
        <div class="col-xl-7 card p-0 mt-5">
            <div class="card-body px-4 py-4">
                <p>
                    <a href="<?php echo e(route('konsultasi')); ?>" class="text-dark" style="text-decoration: none"><i data-feather="arrow-left"></i> Kembali</a>
                </p>
                <div>
                    <h5 style="font-weight: 700">Tambah Keluhan</h5>
                </div>
                <hr style="border: 1px solid #ddd">
                
                <form action="<?php echo e(url('/buat_keluhan')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="col-12">
                        <label for="question">Pertanyaan anda</label>
                        <textarea name="question" class="form-control <?php $__errorArgs = ['question'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Apa keluhan anda?" id="question" style="font-size: 14px" cols="30" rows="10"><?php echo e(old('question')); ?></textarea>
                        <?php $__errorArgs = ['question'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="text-danger" style="font-size: 12px">
                            <?php echo e($message); ?>

                        </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-success px-4">Kirim</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\si-luman\resources\views/tambah_keluhan.blade.php ENDPATH**/ ?>