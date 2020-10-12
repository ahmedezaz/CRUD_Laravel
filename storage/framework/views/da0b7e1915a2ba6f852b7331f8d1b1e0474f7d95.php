<?php $__env->startSection('content'); ?>


<h2 style="text-align: center;">Insert Employye Information Using Laravel</h2>
<p style="margin-top: 50px; background-color: green; color: white">
<?php
  $message=Session::get('message');
  	if ($message) {
  		echo $message;
  		Session::put('message',null);
  	}
?>
</p>
<form method="post" action="<?php echo e(URL::to('/add_info')); ?>" style="text-align: center; font-size: 20px; margin-top: 50px;">

<?php echo e(csrf_field()); ?>

<label>Name:</label>
<input type="text" name="name" placeholder="Enter Name">

<label>Position</label>
<input type="text" name="position">

<label>Salary</label>
<input type="text" name="salary">

<button type="submit">SUBMIT</button>	
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>