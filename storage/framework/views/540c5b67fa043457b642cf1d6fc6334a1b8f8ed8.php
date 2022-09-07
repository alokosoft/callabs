

<?php $__env->startSection('content'); ?>

    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-inbox bg-blue"></i>
                    <div class="d-inline">
                        <h5>Labs</h5>
                        <span>List of All Labs</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <nav class="breadcrumb-container" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="../index.html"><i class="ik ik-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Labs</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Index</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            <?php if(Session::has('message')): ?>
                <div class="alert bg-success alert-success text-white text-center" role="alert">
                    <?php echo e(Session::get('message')); ?>

                </div>
            <?php endif; ?>
            <div class="card">
                <div class="card-body ">
                    <table id="data_table" class="table">
                        <thead>
                            <tr>
                                <th>Parent Test Name</th>
                                <th class="nosort">Sub Test</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(count($sub_tests) > 0): ?>
                                <?php $__currentLoopData = $sub_tests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub_test): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($lab->lab_name); ?></td>
                                         <td><?php echo e($lab->address1); ?></td>
                                        <td><?php echo e($lab->address2); ?></td>
                                        <td><?php echo e($lab->state); ?></td>
                                        <td><?php echo e($lab->city); ?></td>
                                        <td><?php echo e($lab->pin); ?></td>
                                        <td>
                                            <div class="table-actions">
                                                <a href="#" data-toggle="modal" data-target="#exampleModal<?php echo e($lab->id); ?>">
                                                    <i class="btn btn-primary ik ik-eye"></i>
                                                </a>
                                                <a href="<?php echo e(route('doctor.edit', [$lab->id])); ?>"><i
                                                        class="btn btn-warning ik ik-edit-2"></i></a>

                                                <a href="<?php echo e(route('doctor.show', [$lab->id])); ?>">
                                                    <i class="btn btn-danger ik ik-trash-2"></i>
                                                </a>

                                            </div>
                                        </td>
                                        <td></td>

                                    </tr>

                                    <!-- View Modal -->
                                    
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <?php else: ?>
                                <td>No user to display</td>
                            <?php endif; ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\callabs\resources\views\admin\subtest\index.blade.php ENDPATH**/ ?>