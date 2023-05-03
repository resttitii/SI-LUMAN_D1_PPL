<?php
    $title = 'Verify';
    $id_page = 'auth';
?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row justify-content-center" style="height: 100vh">
        <div class="col-xl-7 my-xl-5 my-0 d-flex flex-column align-items-center" style="border-radius: 15px; background: #fff">
            <div class="my-3">
                <h4 class="text-center" style="font-weight: bold">Verify Your Account</h4>  
                <img src="<?php echo e(asset('img/verify_ils.jpg')); ?>" width="350" alt="">
            </div>
            <p class="text-muted text-center mx-xl-5 mx-2">
                We have sent an account verification link to the email  you registered with. If the link is not in the inbox, please look at the spam page.
            </p>
        
            <form action="<?php echo e(route('konsultasi')); ?>" method="GET" id="resend-verification-form">
                <?php echo csrf_field(); ?>
                <button type="submit" class="btn text-light px-4" style="height: 50px; background: #3D4141;">
                    <strong>Resend Verification Link</strong>
                </button>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    document.getElementById('resend-verification-form').addEventListener('submit', function(event) {
        event.preventDefault();
        var form = this;
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: 'Kami Sudah Mengirimkan Link ke Email Anda!',
            confirmButtonText: 'OK'
        }).then(function() {
            form.submit();
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Asus\Downloads\si-luman\si-luman\resources\views/auth/verify.blade.php ENDPATH**/ ?>