<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">My prescriptions: <?php echo e($prescriptions->count()); ?></div>
                    <div class="card-body table-responsive-md">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Date</th>
                                    <th scope="col">Doctor</th>
                                    <th scope="col">Disease</th>
                                    <th scope="col">Symptoms</th>
                                    <th scope="col">Medicines</th>
                                    <th scope="col">Usage Instruction</th>
                                    <th scope="col">Doctor's Feedback</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $prescriptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prescription): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td><?php echo e($prescription->date); ?></td>
                                        <td><?php echo e($prescription->doctor->name); ?></td>
                                        <td><?php echo e($prescription->name_of_disease); ?></td>
                                        <td><?php echo e($prescription->symptoms); ?></td>
                                        <td><?php echo e($prescription->medicine); ?></td>
                                        <td><?php echo e($prescription->usage_instruction); ?></td>
                                        <td><?php echo e($prescription->feedback); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <td>You have no prescriptions</td>
                                <?php endif; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\callabs\resources\views\my-prescription.blade.php ENDPATH**/ ?>