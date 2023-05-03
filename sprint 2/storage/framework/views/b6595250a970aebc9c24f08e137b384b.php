

<?php $__env->startSection('content'); ?>

    <div class="container-fluid">
        <div class="row justify-content-center align-items-start">
            <div class="col-xl-5 col-10 p-4 rounded mb-5 position-relative" style="background: #fff; top: 40px">
                <div>
                    <p>
                        <a href="<?php echo e(route('konsultasi')); ?>" class="text-dark" style="text-decoration: none"><i data-feather="arrow-left"></i> Kembali</a>
                    </p>
                    <h5 class="text-start">
                        <strong><?php echo e($title); ?></strong>
                    </h5>

                    <hr style="border: 1px solid #bbb">

                    <p style="font-size: 14px">
                        Masih belum puas dengan jawaban dari pertanyaan anda? Klik tombol di bawah ini supaya kamu dapat langsung berkonsultasi dengan ahli nya.
                    </p>

                    <a href="https://wa.me/+6285700510840?text=Halo%2C%20saya%20ingin%20berkonsultasi%20lebih%20lanjut." target="_blank">
                        <button class="btn btn-warning mt-4" style="width: 100%; height: 50px;">
                            <strong>Konsultasi Sekarang</strong>
                        </button>
                    </a>
                    

                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\si-luman\resources\views/konsultasi_lanjutan.blade.php ENDPATH**/ ?>