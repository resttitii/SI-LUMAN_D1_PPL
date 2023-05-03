<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <div class="row flex-column justify-content-center align-items-center">
        <img src="<?php echo e(asset('img/logo2.png')); ?>" class="mt-5" style="width: 450px" alt="logo">
        
        <div class="owl-carousel owl-theme">
            <div class="item col-xl-6 p-4 p-xl-5 justify-content-between align-items-center d-xl-flex d-inline-block rounded" style="background: #FFF">
                <div class="col-xl-3 p-0 d-flex d-xl-inline-block justify-content-center col-12 mt-xl-0">
                    <img src="<?php echo e(asset('img/icon/1.png')); ?>" style="width: 100px; height: 90px;" alt="icon">
                </div>
                
                <div class="ms-xl-4 mt-3 mt-xl-0">
                    <h4 style="font-weight: bold" class="text-center text-xl-start">Apa sih SI-LUMAN itu?</h4>
                    <p class="mb-0 text-center text-xl-start">
                        SI-LUMAN adalah sistem informasi layanan umum kesehatan hewan
                        berbasis website guna mempermudah peternak dan dokter hewan.
                    </p>
                </div>
            </div>

            <div class="item col-xl-6 p-4 p-xl-5 justify-content-between align-items-center d-xl-flex d-inline-block rounded" style="background: #FFF">
                <div class="col-xl-3 p-0 d-flex d-xl-inline-block justify-content-center col-12 mt-xl-0">
                    <img src="<?php echo e(asset('img/icon/2.png')); ?>" style="width: 100px; height: 90px;" alt="icon">
                </div>
                
                <div class="ms-xl-4 mt-3 mt-xl-0">
                    <p class="mb-0 text-center text-xl-start">
                        Konsultasikan terkait permasalahan hewan ternak anda dengan
                        akses website SI-LUMAN! Ayo coba sekarang!
                    </p>
                </div>
            </div>

            <div class="item col-xl-6 p-4 p-xl-5 justify-content-between align-items-center d-xl-flex d-inline-block rounded" style="background: #FFF">
                <div class="col-xl-3 p-0 d-flex d-xl-inline-block justify-content-center col-12 mt-xl-0">
                    <img src="<?php echo e(asset('img/icon/3.png')); ?>" style="width: 100px; height: 90px;" alt="icon">
                </div>
                
                <div class="ms-xl-4 mt-3 mt-xl-0">
                    <p class="mb-0 text-center text-xl-start">
                        Ayo manfaatkan website SI-LUMAN untuk transaksi
                        jual-beli terkait hasil olahan hewan ternak!
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Asus\Downloads\si-luman\si-luman\resources\views/beranda.blade.php ENDPATH**/ ?>