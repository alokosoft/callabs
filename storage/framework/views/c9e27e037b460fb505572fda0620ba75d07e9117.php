

<?php $__env->startSection('content'); ?>

    <div class="page-header">
        <div class="row ">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-inbox bg-blue"></i>
                    <div class="d-inline">
                        <h5>Packages</h5>
                        <span>The List of All Packages</span>
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
                            <a href="#">Packages</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Index</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>


    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <?php if(Session::has('message')): ?>
                <div class="alert bg-success alert-success text-white" role="alert">
                    <?php echo e(Session::get('message')); ?>

                </div>
            <?php endif; ?>
            <div class="card">
                <div class="card-header">
                    <h3>All Departments</h3>

                </div>
                <div class="card-body">
                    <table id="data_table" class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>

                                <th class="nosort">&nbsp;</th>
                                <th class="nosort">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(count($Packages) > 0): ?>
                                <?php $__currentLoopData = $Packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $Package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($key + 1); ?></td>
                                        <td><?php echo e($Packages->package_name); ?></td>

                                        <td>
                                            <div class="table-actions row">
                                                <a href="<?php echo e(route('department.edit', [$department->id])); ?>"><i
                                                        class="btn btn-warning ik ik-edit-2"></i></a>

                                                <form action="<?php echo e(route('department.destroy', [$department->id])); ?>"
                                                    method="post"><?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="btn btn-danger ml-3"><i
                                                            class="ik ik-trash-2"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                        <td>

                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <?php else: ?>
                                <td>No Department. Please create one.</td>
                            <?php endif; ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\callabs\resources\views\admin\test\index.blade.php ENDPATH**/ ?>