<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2>Prescription</h2>
                    </div>
                    <div class="card-body table-responsive-md">
                        <p>Date: <?php echo e($prescription->date); ?></p>
                        <p>Patient: <?php echo e($prescription->user->name); ?></p>
                        <p>Doctor: <?php echo e($prescription->doctor->name); ?></p>
                        <p>Disease: <?php echo e($prescription->name_of_disease); ?></p>
                        <p>Symptoms: <?php echo e($prescription->symptoms); ?></p>
                        <p>Medicine: <?php echo e($prescription->medicine); ?></p>
                        <p>Usage Instruction: <?php echo e($prescription->usage_instruction); ?></p>
                        <p>Feedback: <?php echo e($prescription->feedback); ?></p>
                        <p>Doctor signature:<?php echo e($prescription->signature); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\callabs\resources\views\prescription\show.blade.php ENDPATH**/ ?>