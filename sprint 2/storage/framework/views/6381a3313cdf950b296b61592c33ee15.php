<?php if(session()->has('success')): ?>
    <script>
        Swal.fire(
        'Success!',
        "<?php echo e(session('success')); ?>",
        'success'
        )
    </script>

<?php elseif(session()->has('error')): ?>
    <script>
        Swal.fire(
        'Error!',
        "<?php echo e(session('error')); ?>",
        'error'
        )
    </script>

<?php elseif(session()->has('warning')): ?>
    <script>
        Swal.fire(
        'Warning!',
        "<?php echo e(session('warning')); ?>",
        'warning'
        )
    </script>

<?php elseif(session()->has('info')): ?>
    <script>
        Swal.fire(
        'Info!',
        "<?php echo e(session('info')); ?>",
        'info'
        )
    </script>

<?php endif; ?><?php /**PATH D:\si-luman\resources\views/components/popup.blade.php ENDPATH**/ ?>