    <div class="container-fluid">

    <div class="row p-2 justify-content-center align-items-center" style="background: #b1c39f">
        <a href="<?php echo e(route('beranda')); ?>" class="text-center">
            <img src="<?php echo e(asset('img/logo.png')); ?>" style="width: 200px" alt="logo">
        </a>
    </div>

    <?php if($id_page != 'auth'): ?>
    
    <div class="row">
        <nav class="navbar navbar-expand-xl" style="box-shadow: rgba(0, 0, 0, 0.05) 0px 1px 2px 0px; background: #C4D5B2; z-index: 10;">
            <div class="d-flex <?php if(auth()->guard()->check()): ?> justify-content-between <?php else: ?> justify-content-end <?php endif; ?> navbar-collapse">
                <?php if(auth()->guard()->check()): ?>
                <button type="button" class="navbar-toggler" style="border: 0;" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-nav collapse navbar-collapse navbar-expand-xl mx-3" id="navbarCollapse">
                    <a href="<?php echo e(route('beranda')); ?>" class="nav-item nav-link text-center" <?php if($id_page == 1): ?> style="font-weight: bold;" <?php endif; ?>>Beranda</a>
                    <a href="<?php echo e(route('konsultasi')); ?>" class="nav-item nav-link text-center" <?php if($id_page == 2 || $id_page == 11 || $id_page == 12 || $id_page == 13 || $id_page == 14): ?> style="font-weight: bold;" <?php endif; ?>>Konsultasi</a>
                    <a href="<?php echo e(route('toko')); ?>" class="nav-item nav-link text-center" <?php if($id_page == 3): ?> style="font-weight: bold;" <?php endif; ?>>Toko</a>
                </div>

                <div class="navbar-nav mx-3">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                          <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="d-flex justify-content-center align-items-center" style="height: 40px; width: 40px; border-radius: 100%;">
                                <img src="<?php echo e(asset('img/icon/'.auth()->user()->role.'_profil.png')); ?>" style="width: 100%; height: 100%; object-fit: cover; border-radius: 100%;" alt="">
                            </div>
                          </a>

                          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                            <li style="border-bottom: 1px solid #eee">
                                <a class="dropdown-item disabled">
                                    <img src="<?php echo e(asset('img/icon/'.auth()->user()->role.'_profil.png')); ?>" style="width: 30px;object-fit: cover; border-radius: 100%;" alt="">
                                    <?php echo e(auth()->user()->username); ?>

                                </a>
                            </li>
                            <li><a class="dropdown-item <?php if($id_page == 4): ?> active <?php endif; ?>" href="<?php echo e(route('profile')); ?>">Profile</a></li>

                            <?php if(auth()->user()->role == 'pelanggan'): ?>
                            
                            <li><a class="dropdown-item <?php if($id_page == 5): ?> active <?php endif; ?>" href="<?php echo e(route('upgrade_role')); ?>">Upgrade Role</a></li>
                            
                            <?php endif; ?>

                            <?php if(auth()->user()->role == 'admin'): ?>

                            <li>
                                <a class="dropdown-item disabled">Role</a>
                                <ul>        
                                    <li><a href="<?php echo e(route('data_pelanggan')); ?>" class="dropdown-item <?php if($id_page == 7): ?> active <?php endif; ?>">Pelanggan</a></li>
                                    <li><a href="<?php echo e(route('data_peternak')); ?>" class="dropdown-item <?php if($id_page == 8): ?> active <?php endif; ?>">Peternak</a></li>
                                    <li><a href="<?php echo e(route('data_dokter')); ?>" class="dropdown-item <?php if($id_page == 9): ?> active <?php endif; ?>">Dokter</a></li>
                                </ul>
                            </li>
                            
                            <li><a class="dropdown-item <?php if($id_page == 10): ?> active <?php endif; ?>" href="<?php echo e(route('change_role')); ?>">Change Role</a></li>
                            
                            <?php endif; ?>

                            <li>
                                <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#logout">Logout</a>
                            </li>
                          </ul>

                        </li>
                    </ul>

                </div>

                <?php else: ?>

                <?php if($id_page != 'auth'): ?>
                
                <div class="navbar-nav mx-3">
                    <a href="<?php echo e(route('login')); ?>">
                        <button class="btn btn-success px-4">Login</button>
                    </a>
                </div>

                <?php endif; ?>

                <?php endif; ?>
             </div>
        </nav>
    </div>
    <?php endif; ?>

</div>

<!-- Modal -->
<div class="modal fade" id="logout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Perhatian</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Apakah anda yakin ingin keluar dari sistem?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
          <form action="<?php echo e(route('logout')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <button type="submit" class="btn btn-danger">Ya</button>
          </form>
        </div>
      </div>
    </div>
</div><?php /**PATH C:\Users\Asus\Downloads\si-luman\si-luman\resources\views/components/header.blade.php ENDPATH**/ ?>