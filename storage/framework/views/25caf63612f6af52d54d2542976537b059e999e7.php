<?php $__env->startSection('content'); ?>


<h2 style="text-align: center;">Update Employee Information Using Laravel</h2>

<form method="post" action="<?php echo e(URL::to('/edit',$info->employee_id)); ?>" style="text-align: center; font-size: 20px; margin-top: 50px;">

<?php echo e(csrf_field()); ?>

<label>Name:</label>
<input type="text" name="name" placeholder="Enter Name" value="<?php echo e($info->name); ?>">

<label>Position</label>
<input type="text" name="position" value="<?php echo e($info->position); ?>">

<label>Salary</label>
<input type="text" name="salary"  value="<?php echo e($info->salary); ?>">

<button type="submit">UPDATE</button>	
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>