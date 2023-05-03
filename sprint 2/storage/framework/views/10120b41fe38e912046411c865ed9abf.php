

<?php $__env->startSection('content'); ?>
<div class="container-fluid" style="margin-bottom: 5em"> 
    <div class="row justify-content-center align-items-center mt-4" style="font-size: 14px">
        <div class="col-xl-7 col-11 card p-0 mt-5">
            <div class="card-body px-4 py-4">
                <p>
                    <a href="<?php echo e(url('/tanggapan/'.$keluhan->keluhan_id)); ?>" class="text-dark" style="text-decoration: none"><i data-feather="arrow-left"></i> Kembali</a>
                </p>
                <div>
                    <h5 style="font-weight: 700"><?php echo e($title); ?></h5>
                </div>
                <hr style="border: 1px solid #ddd">
                
                <?php if($id_page == 13): ?> <form action="<?php echo e(url('/buat_tanggapan')); ?>" method="POST"> <?php endif; ?>
                <?php if($id_page == 17): ?> <form action="<?php echo e(url('/update_tanggapan/'.$tanggapan->tanggapan_id)); ?>" method="POST"> <?php endif; ?>
                    <?php echo csrf_field(); ?>
                    <div class="col-12">
                        <input type="hidden" name="keluhan_id" value="<?php echo e($keluhan->keluhan_id); ?>" id="">
                        <label for="comment">Tanggapan anda</label>
                        <textarea name="comment"  class="form-control <?php $__errorArgs = ['comment'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Apa tanggapan anda?" id="comment" style="font-size: 14px" cols="30" rows="10"><?php if($id_page == 17): ?><?php echo e($tanggapan->comment); ?><?php else: ?><?php echo e(old('comment')); ?><?php endif; ?> </textarea>
                        <?php $__errorArgs = ['comment'];
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
                            <button type="submit" class="btn <?php if($id_page == 17): ?> btn-info <?php else: ?> btn-warning <?php endif; ?> px-4"><?php if($id_page == 17): ?> Update <?php else: ?> Kirim <?php endif; ?></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Asus\Downloads\si-luman\si-luman\resources\views/manipulasi_tanggapan.blade.php ENDPATH**/ ?>