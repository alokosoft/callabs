Dear <?php echo e($mailData['name']); ?>,
<p>Thank you for booking your appointment with our Hospital.</p>
<p>The details of your appointment are below:</p>
<p>Date: <?php echo e($mailData['date']); ?></p>
<p>Time: <?php echo e($mailData['time']); ?></p>
<p>Doctor: <?php echo e($mailData['doctorName']); ?></p>
<br>
Location: 313 No Name Road, California, 14152
<br>
Contact: 123 213-1234
<?php /**PATH C:\xampp\htdocs\callabs\resources\views\email\appointment.blade.php ENDPATH**/ ?>