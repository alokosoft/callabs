<div class="modal fade" id="exampleModal<?php echo e($user->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Doctor information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p><img src="<?php echo e(asset('images')); ?>/<?php echo e($user->image); ?>" class="table-user-thumb" alt="" width="200"></p>
                <p class="badge badge-pill badge-dark">Role: <?php echo e($user->role->name); ?></p>
                <p>Gender: <?php echo e($user->gender); ?></p>
                <p>Name: <?php echo e($user->name); ?></p>
                <p>Email: <?php echo e($user->email); ?></p>
                <p>Address: <?php echo e($user->address); ?></p>
                <p>Phone number: <?php echo e($user->phone_number); ?></p>
                <p>Department: <?php echo e($user->department); ?></p>
                <p>Education: <?php echo e($user->education); ?></p>
                <p>About: <?php echo e($user->description); ?></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\callabs\resources\views\admin\doctor\modal.blade.php ENDPATH**/ ?>