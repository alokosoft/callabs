<?php $__env->startSection('content'); ?>
    <div class="container">
        <?php if(Session::has('message')): ?>
            <div class="alert alert-success"><?php echo e(Session::get('message')); ?></div>
        <?php endif; ?>
        <div class="row ">

            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">User Profile</div>

                    <div class="card-body">
                        <p>Name: <?php echo e(auth()->user()->name); ?></p>
                        <p>Email: <?php echo e(auth()->user()->email); ?></p>
                        <p>Address: <?php echo e(auth()->user()->address); ?></p>
                        <p>Phone: <?php echo e(auth()->user()->phone_number); ?></p>
                        <p>Gender: <?php echo e(auth()->user()->gender); ?></p>
                        <p>Bio: <?php echo e(auth()->user()->description); ?></p>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Update Profile</div>

                    <div class="card-body">
                        <form action="<?php echo e(route('profile.store')); ?>" method="post"><?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    value="<?php echo e(auth()->user()->name); ?>">
                                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="address" class="form-control"
                                    value="<?php echo e(auth()->user()->address); ?>">

                            </div>
                            <div class="form-group">
                                <label>Phone number</label>
                                <input type="text" name="phone_number" class="form-control"
                                    value="<?php echo e(auth()->user()->phone_number); ?>">

                            </div>
                            <div class="form-group">
                                <label>Gender</label>
                                <select name="gender" class="form-control <?php $__errorArgs = ['gender'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                    <option value="">select gender</option>
                                    <option value="male" <?php if(auth()->user()->gender === 'male'): ?>selected <?php endif; ?>
                                        >Male</option>
                                    <option value="female" <?php if(auth()->user()->gender === 'female'): ?>selected <?php endif; ?>
                                        >Female</option>
                                </select>
                                <?php $__errorArgs = ['gender'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                <div class="form-group">
                                    <label>Bio</label>
                                    <textarea name="description"
                                        class="form-control"><?php echo e(auth()->user()->description); ?></textarea>

                                </div>
                                <div class="form-group">

                                    <button class="btn btn-primary" type="submit">Update Profile</button>

                                </div>

                            </div>

                        </form>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">Update Image</div>
                    <form action="<?php echo e(route('profile.pic')); ?>" method="post" enctype="multipart/form-data"><?php echo csrf_field(); ?>
                        <div class="card-body">
                            <?php if(!auth()->user()->image): ?>
                                <img src="/images/blank.png" width="120">
                            <?php else: ?>
                                <img src="/profile/<?php echo e(auth()->user()->image); ?>" width="120">
                            <?php endif; ?>
                            <br>
                            <input type="file" name="file" class="form-control" required="">
                            <br>
                            <?php $__errorArgs = ['file'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            <button type="submit" class="btn btn-primary">Update Image</button>

                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\callabs\resources\views\profile\index.blade.php ENDPATH**/ ?>