<div class="bot-nav">
    <div class="d-flex flex-column align-items-center" title="Home">
        <a href="<?php echo e(route('beranda')); ?>">
            <i class="fa fa-home <?php if($id_page == 1): ?> text-success <?php else: ?> text-secondary <?php endif; ?>" data-feather="home"></i>
        </a>
        <span style="font-size: 10px;" <?php if($id_page == 1): ?> class="text-success <?php else: ?> text-secondary <?php endif; ?>">Home</span>
    </div>

    <div class="d-flex flex-column align-items-center" title="Konsultasi">
        <a href="<?php echo e(route('konsultasi')); ?>">
            <i class="fa fa-home <?php if($id_page == 2): ?> text-success <?php else: ?> text-secondary <?php endif; ?>" data-feather="coffee"></i>
        </a>
        <span style="font-size: 10px;" <?php if($id_page == 2): ?> class="text-success <?php else: ?> text-secondary <?php endif; ?>">Konsultasi</span>
    </div>
 
    <div class="d-flex flex-column align-items-center" title="Toko">
        <a href="<?php echo e(route('toko')); ?>">
            <i class="fa fa-home <?php if($id_page == 3): ?> text-success <?php else: ?> text-secondary <?php endif; ?>" data-feather="shopping-bag"></i>
        </a>
        <span style="font-size: 10px;" <?php if($id_page == 3): ?> class="text-success <?php else: ?> text-secondary <?php endif; ?>">Toko</span>
    </div>
</div><?php /**PATH D:\si-luman\resources\views/components/bot-nav.blade.php ENDPATH**/ ?>