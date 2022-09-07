<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">My appointments: <?php echo e($appointments->count()); ?></div>

                    <div class="card-body table-responsive-sm">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Doctor</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">Date for</th>
                                    <th scope="col">Created date</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$appointment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td><?php echo e($key + 1); ?></td>
                                        <td><?php echo e($appointment->doctor->name); ?></td>
                                        <td><?php echo e($appointment->time); ?></td>
                                        <td><?php echo e($appointment->date); ?></td>
                                        <td><?php echo e($appointment->created_at->format('m-d-yy')); ?></td>
                                        <td>
                                            <?php if($appointment->status == 0): ?>
                                                <p>Not Visited</p>
                                            <?php else: ?>
                                                <p>Checked-In</p>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <td>You have no any appointments</td>
                                <?php endif; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\callabs\resources\views\booking\index.blade.php ENDPATH**/ ?>