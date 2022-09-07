<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <?php if(Session::has('message')): ?>
                    <div class="alert bg-success alert-success text-white text-center" role="alert">
                        <?php echo e(Session::get('message')); ?>

                    </div>
                <?php endif; ?>
                <div class="card">
                    <div class="card-header">
                        Total Patients: <?php echo e($bookings->count()); ?>

                    </div>
                    <div class="card-body table-responsive-lg">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Photo</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">User</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Gender</th>

                                    <th scope="col">Doctor</th>

                                    <th scope="col">Prescription</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $bookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td><?php echo e($key + 1); ?></td>
                                        <td><img src="profile/<?php echo e($booking->user->image); ?>" width="80">
                                        </td>
                                        <td><?php echo e($booking->date); ?></td>
                                        <td><?php echo e($booking->user->name); ?></td>
                                        <td><?php echo e($booking->user->email); ?></td>
                                        <td><?php echo e($booking->user->phone_number); ?></td>
                                        <td><?php echo e($booking->user->gender); ?></td>
                                        <td><?php echo e($booking->doctor->name); ?></td>

                                        <td>
                                            <?php if(!App\Prescription::where('date', date('m-d-yy'))
                ->where('doctor_id', auth()->user()->id)
                ->where('user_id', $booking->user->id)
                ->exists()): ?>
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#exampleModal<?php echo e($booking->user_id); ?>">
                                                    Prescribe
                                                </button>
                                                <?php echo $__env->make('prescription.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                            <?php else: ?>
                                                <a href="<?php echo e(route('prescription.show', [$booking->user_id, $booking->date])); ?>"
                                                    class="btn btn-info">View</a>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <td>There is no patient!</td>
                                <?php endif; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php echo $__env->make('prescription.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\callabs\resources\views\prescription\all.blade.php ENDPATH**/ ?>