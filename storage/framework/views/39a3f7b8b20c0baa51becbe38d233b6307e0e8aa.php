<?php $__env->startSection('content'); ?>

    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">


                <div class="page-header-title">
                    <i class="ik ik-command bg-blue"></i>
                    <div class="d-inline">
                        <h5>Doctors</h5>
                        <span>Available time</span>

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <nav class="breadcrumb-container" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="../index.html"><i class="ik ik-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">Doctor</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Appointment</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-10">
            <?php if(Session::has('message')): ?>
                <div class="alert bg-success alert-success text-white" role="alert">
                    <?php echo e(Session::get('message')); ?>

                </div>
            <?php endif; ?>
            <?php if(Session::has('errMessage')): ?>
                <div class="alert bg-danger alert-success text-white" role="alert">
                    <?php echo e(Session::get('errMessage')); ?>

                </div>
            <?php endif; ?>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="alert alert-danger">
                    <?php echo e($error); ?>


                </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            <form action="<?php echo e(route('appointment.check')); ?>" method="post">
                <?php echo csrf_field(); ?>

                <div class="card">
                    <div class="card-header">
                        Choose date
                        <br>
                        <?php if(isset($date)): ?>
                            Your timetable for:
                            <?php echo e($date); ?>

                        <?php endif; ?>

                    </div>
                    <div class="card-body">
                        <input type="text" class="form-control datetimepicker-input" id="datepicker"
                            data-toggle="datetimepicker" data-target="#datepicker" name="date">
                        <br>
                        <button type="submit" class="btn btn-primary">Check</button>
                    </div>
                </div>
            </form>
            <?php if(Route::is('appointment.check')): ?>
                <form action="<?php echo e(route('update')); ?>" method="post">
                    <?php echo csrf_field(); ?>

                    <div class="card">
                        <div class="card-header">
                            Choose AM time
                            <span style="margin-left: 700px">Check/Uncheck
                                <input type="checkbox"
                                    onclick=" for(c in document.getElementsByName('time[]')) document.getElementsByName('time[]').item(c).checked=this.checked">
                            </span>
                        </div>

                        <div class="card-body">

                            <table class="table table-striped">
                                <tbody>
                                    <input type="hidden" name="appointmentId" value="<?php echo e($appointmentId); ?> ">
                                    <tr>
                                        <th scope="row">1</th>
                                        <td><input type="checkbox" name="time[]" value="6am" <?php if(isset($times)): ?><?php echo e($times->contains('time', '6am') ? 'checked' : ''); ?>

            <?php endif; ?>> 6am</td>
            <td><input type="checkbox" name="time[]" value="6.20am" <?php if(isset($times)): ?><?php echo e($times->contains('time', '6.20am') ? 'checked' : ''); ?>

                <?php endif; ?>
                > 6.20am</td>
            <td><input type="checkbox" name="time[]" value="6.40am" <?php if(isset($times)): ?><?php echo e($times->contains('time', '6.40am') ? 'checked' : ''); ?>

                <?php endif; ?>
                > 6.40am</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td><input type="checkbox" name="time[]" value="7am" <?php if(isset($times)): ?><?php echo e($times->contains('time', '7am') ? 'checked' : ''); ?>

                    <?php endif; ?>
                    > 7am</td>
                <td><input type="checkbox" name="time[]" value="7.20am" <?php if(isset($times)): ?><?php echo e($times->contains('time', '7.20am') ? 'checked' : ''); ?>

                    <?php endif; ?>> 7.20am</td>
                <td><input type="checkbox" name="time[]" value="7.40am" <?php if(isset($times)): ?><?php echo e($times->contains('time', '7.40am') ? 'checked' : ''); ?>

                    <?php endif; ?>> 7.40am</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td><input type="checkbox" name="time[]" value="8am" <?php if(isset($times)): ?><?php echo e($times->contains('time', '8am') ? 'checked' : ''); ?>

                    <?php endif; ?>
                    > 8am</td>
                <td><input type="checkbox" name="time[]" value="8.20am" <?php if(isset($times)): ?><?php echo e($times->contains('time', '8.20am') ? 'checked' : ''); ?>

                    <?php endif; ?>> 8.20am</td>
                <td><input type="checkbox" name="time[]" value="8.40am" <?php if(isset($times)): ?><?php echo e($times->contains('time', '8.40am') ? 'checked' : ''); ?>

                    <?php endif; ?>> 8.40am</td>
            </tr>

            <tr>
                <th scope="row">4</th>
                <td><input type="checkbox" name="time[]" value="9am" <?php if(isset($times)): ?><?php echo e($times->contains('time', '9am') ? 'checked' : ''); ?>

                    <?php endif; ?>
                    > 9am</td>
                <td><input type="checkbox" name="time[]" value="9.20am" <?php if(isset($times)): ?><?php echo e($times->contains('time', '9.20am') ? 'checked' : ''); ?>

                    <?php endif; ?>> 9.20am</td>
                <td><input type="checkbox" name="time[]" value="9.40am" <?php if(isset($times)): ?><?php echo e($times->contains('time', '9.40am') ? 'checked' : ''); ?>

                    <?php endif; ?>> 9.40am</td>
            </tr>

            <tr>
                <th scope="row">5</th>
                <td><input type="checkbox" name="time[]" value="10am" <?php if(isset($times)): ?><?php echo e($times->contains('time', '10am') ? 'checked' : ''); ?>

                    <?php endif; ?>> 10am</td>
                <td><input type="checkbox" name="time[]" value="10.20am" <?php if(isset($times)): ?><?php echo e($times->contains('time', '10.20am') ? 'checked' : ''); ?>

                    <?php endif; ?>> 10.20am</td>
                <td><input type="checkbox" name="time[]" value="10.40am" <?php if(isset($times)): ?><?php echo e($times->contains('time', '10.40am') ? 'checked' : ''); ?>

                    <?php endif; ?>> 10.40am</td>
            </tr>

            <tr>
                <th scope="row">6</th>
                <td><input type="checkbox" name="time[]" value="11am" <?php if(isset($times)): ?><?php echo e($times->contains('time', '11am') ? 'checked' : ''); ?>

                    <?php endif; ?>> 11am</td>
                <td><input type="checkbox" name="time[]" value="11.20am" <?php if(isset($times)): ?><?php echo e($times->contains('time', '11.20am') ? 'checked' : ''); ?>

                    <?php endif; ?>> 11.20am</td>
                <td><input type="checkbox" name="time[]" value="11.40am" <?php if(isset($times)): ?><?php echo e($times->contains('time', '11.40am') ? 'checked' : ''); ?>

                    <?php endif; ?>> 11.40am</td>
            </tr>


            </tbody>
            </table>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            Choose PM time
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <th scope="row">7</th>
                        <td><input type="checkbox" name="time[]" value="12pm" <?php if(isset($times)): ?><?php echo e($times->contains('time', '12pm') ? 'checked' : ''); ?>

                            <?php endif; ?>> 12pm</td>
                        <td><input type="checkbox" name="time[]" value="12.20pm" <?php if(isset($times)): ?><?php echo e($times->contains('time', '12.20pm') ? 'checked' : ''); ?>

                            <?php endif; ?>> 12.20pm</td>
                        <td><input type="checkbox" name="time[]" value="12.40pm" <?php if(isset($times)): ?><?php echo e($times->contains('time', '12.40pm') ? 'checked' : ''); ?>

                            <?php endif; ?>> 12.40pm</td>
                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <td><input type="checkbox" name="time[]" value="1pm" <?php if(isset($times)): ?><?php echo e($times->contains('time', '1pm') ? 'checked' : ''); ?>

                            <?php endif; ?>> 1pm</td>
                        <td><input type="checkbox" name="time[]" value="1.20pm" <?php if(isset($times)): ?><?php echo e($times->contains('time', '1.20pm') ? 'checked' : ''); ?>

                            <?php endif; ?>> 1.20pm</td>
                        <td><input type="checkbox" name="time[]" value="1.40pm" <?php if(isset($times)): ?><?php echo e($times->contains('time', '1.40pm') ? 'checked' : ''); ?>

                            <?php endif; ?>> 1.40pm</td>
                    </tr>
                    <tr>
                        <th scope="row">8</th>
                        <td><input type="checkbox" name="time[]" value="2pm" <?php if(isset($times)): ?><?php echo e($times->contains('time', '2pm') ? 'checked' : ''); ?>

                            <?php endif; ?>> 2pm</td>
                        <td><input type="checkbox" name="time[]" value="2.20pm" <?php if(isset($times)): ?><?php echo e($times->contains('time', '2.20pm') ? 'checked' : ''); ?>

                            <?php endif; ?>> 2.20pm</td>
                        <td><input type="checkbox" name="time[]" value="2.40pm" <?php if(isset($times)): ?><?php echo e($times->contains('time', '2.40pm') ? 'checked' : ''); ?>

                            <?php endif; ?>> 2.40pm</td>
                    </tr>
                    <tr>
                        <th scope="row">9</th>
                        <td><input type="checkbox" name="time[]" value="3pm" <?php if(isset($times)): ?><?php echo e($times->contains('time', '3pm') ? 'checked' : ''); ?>

                            <?php endif; ?>> 3pm</td>
                        <td><input type="checkbox" name="time[]" value="3.20pm" <?php if(isset($times)): ?><?php echo e($times->contains('time', '3.20pm') ? 'checked' : ''); ?>

                            <?php endif; ?>> 3.20pm</td>
                        <td><input type="checkbox" name="time[]" value="3.40pm" <?php if(isset($times)): ?><?php echo e($times->contains('time', '3.40pm') ? 'checked' : ''); ?>

                            <?php endif; ?>> 3.40pm</td>
                    </tr>
                    <tr>
                        <th scope="row">10</th>
                        <td><input type="checkbox" name="time[]" value="4pm" <?php if(isset($times)): ?><?php echo e($times->contains('time', '4pm') ? 'checked' : ''); ?>

                            <?php endif; ?>> 4pm</td>
                        <td><input type="checkbox" name="time[]" value="4.20pm" <?php if(isset($times)): ?><?php echo e($times->contains('time', '4.20pm') ? 'checked' : ''); ?>

                            <?php endif; ?>> 4.20pm</td>
                        <td><input type="checkbox" name="time[]" value="4.40pm" <?php if(isset($times)): ?><?php echo e($times->contains('time', '4.40pm') ? 'checked' : ''); ?>

                            <?php endif; ?>> 4.40pm</td>
                    </tr>
                    <tr>
                        <th scope="row">11</th>
                        <td><input type="checkbox" name="time[]" value="5pm" <?php if(isset($times)): ?><?php echo e($times->contains('time', '5pm') ? 'checked' : ''); ?>

                            <?php endif; ?>> 5pm</td>
                        <td><input type="checkbox" name="time[]" value="5.20pm" <?php if(isset($times)): ?><?php echo e($times->contains('time', '5.20pm') ? 'checked' : ''); ?>

                            <?php endif; ?>> 5.20pm</td>
                        <td><input type="checkbox" name="time[]" value="5.40pm" <?php if(isset($times)): ?><?php echo e($times->contains('time', '5.40pm') ? 'checked' : ''); ?>

                            <?php endif; ?>> 5.40pm</td>
                    </tr>
                    <tr>
                        <th scope="row">12</th>
                        <td><input type="checkbox" name="time[]" value="6pm" <?php if(isset($times)): ?><?php echo e($times->contains('time', '6pm') ? 'checked' : ''); ?>

                            <?php endif; ?>> 6pm</td>
                        <td><input type="checkbox" name="time[]" value="6.20pm" <?php if(isset($times)): ?><?php echo e($times->contains('time', '6.20pm') ? 'checked' : ''); ?>

                            <?php endif; ?>> 6.20pm</td>
                        <td><input type="checkbox" name="time[]" value="6.40pm" <?php if(isset($times)): ?><?php echo e($times->contains('time', '6.40pm') ? 'checked' : ''); ?>

                            <?php endif; ?>> 6.40pm</td>
                    </tr>
                    <tr>
                        <th scope="row">13</th>
                        <td><input type="checkbox" name="time[]" value="7pm" <?php if(isset($times)): ?><?php echo e($times->contains('time', '7pm') ? 'checked' : ''); ?>

                            <?php endif; ?>> 7pm</td>
                        <td><input type="checkbox" name="time[]" value="7.20pm" <?php if(isset($times)): ?><?php echo e($times->contains('time', '7.20pm') ? 'checked' : ''); ?>

                            <?php endif; ?>> 7.20pm</td>
                        <td><input type="checkbox" name="time[]" value="7.40pm" <?php if(isset($times)): ?><?php echo e($times->contains('time', '7.40pm') ? 'checked' : ''); ?>

                            <?php endif; ?>> 7.40pm</td>
                    </tr>
                    <tr>
                        <th scope="row">14</th>
                        <td><input type="checkbox" name="time[]" value="8pm" <?php if(isset($times)): ?><?php echo e($times->contains('time', '8pm') ? 'checked' : ''); ?>

                            <?php endif; ?>> 8pm</td>
                        <td><input type="checkbox" name="time[]" value="8.20pm" <?php if(isset($times)): ?><?php echo e($times->contains('time', '8.20pm') ? 'checked' : ''); ?>

                            <?php endif; ?>> 8.20pm</td>
                        <td><input type="checkbox" name="time[]" value="8.40pm" <?php if(isset($times)): ?><?php echo e($times->contains('time', '8.40pm') ? 'checked' : ''); ?>

                            <?php endif; ?>> 8.40pm</td>
                    </tr>
                    <tr>
                        <th scope="row">15</th>
                        <td><input type="checkbox" name="time[]" value="9pm" <?php if(isset($times)): ?><?php echo e($times->contains('time', '9pm') ? 'checked' : ''); ?>

                            <?php endif; ?>> 9pm</td>
                        <td><input type="checkbox" name="time[]" value="9.20pm" <?php if(isset($times)): ?><?php echo e($times->contains('time', '9.20pm') ? 'checked' : ''); ?>

                            <?php endif; ?>> 9.20pm</td>
                        <td><input type="checkbox" name="time[]" value="9.40pm" <?php if(isset($times)): ?><?php echo e($times->contains('time', '9.40pm') ? 'checked' : ''); ?>

                            <?php endif; ?>> 9.40pm</td>
                    </tr>



                </tbody>
            </table>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

    </form>
    
<?php else: ?>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Creator</th>
                <th scope="col">Date</th>
                <th scope="col">View & Update</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $myAppointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appointment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($loop->index + 1); ?></td>
                    <td><?php echo e($appointment->doctor->name); ?></td>
                    <td><?php echo e($appointment->date); ?></td>
                    <td>
                        <form action="<?php echo e(route('appointment.check')); ?>" method="post"><?php echo csrf_field(); ?>
                            <input type="hidden" name="date" value="<?php echo e($appointment->date); ?>">
                            <button type="submit" class="btn btn-primary">View & Update</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <?php endif; ?>
    </div>
    <style type="text/css">
        input[type="checkbox"] {
            zoom: 1.1;

        }

        body {
            font-size: 18px;
        }

    </style>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\callabs\resources\views\admin\appointment\index.blade.php ENDPATH**/ ?>