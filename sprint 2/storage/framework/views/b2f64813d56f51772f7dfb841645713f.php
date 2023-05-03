

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row mx-2 justify-content-center align-items-start">
            <div class="col-xl-10 mb-5 p-0" style="position: relative; top: 50px;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="text-center" style="font-weight: bold"><?php echo e($title); ?></h5>
                    
                        <div class="table-responsive">
                            <table class="table table-striped" id="users">
                                <thead>
                                    <tr style="white-space: nowrap; font-size: 14px">
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>Username</th>
                                        <th>Alamat</th>
                                        <th>Email</th>
                                        <th>No. HP</th>
                                        <th>Status Email</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                        $no = 1;
                                    ?>

                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr style="font-size: 14px; white-space: nowrap">
                                        <td><?php echo e($no++); ?></td>
                                        <td><?php echo e($item->name); ?></td>
                                        <td><?php echo e($item->username); ?></td>
                                        <td><?php echo e($item->alamat); ?></td>
                                        <td><?php echo e($item->email); ?></td>
                                        <td><?php echo e($item->no_hp); ?></td>
                                        <?php if($item->email_verified_at != null): ?>

                                        <td>
                                            <span class="rounded px-3 bg-success text-light">Verified</span>
                                        </td>
                                        
                                        <?php else: ?>
                                        <td>
                                            <span class="rounded px-3 bg-danger text-light">Not Verified</span>
                                        </td>
                                            
                                        <?php endif; ?>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\si-luman\resources\views/users.blade.php ENDPATH**/ ?>