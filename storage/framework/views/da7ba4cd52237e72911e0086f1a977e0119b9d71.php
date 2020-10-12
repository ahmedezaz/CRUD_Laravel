<?php $__env->startSection('content'); ?>

<h2 style="text-align: center;">Read All Information From Employee Table Using Laravel</h2>

<?php 
	$message=Session::get('message');

	if($message){
		echo $message;
		Session::put('message',null);
	}

 ?>

 <?php 
	$message_update=Session::get('message_update');

	if($message_update){
		echo $message_update;
		Session::put('message_update',null);
	}

 ?>
<table  width="100%" style="border-collapse: collapse;">
	<thead>
		<tr>
			<td>Employee_id</td>
			<td>Name</td>
			<td>Position</td>
			<td>Salary</td>
		</tr>
	</thead>

	<tbody>
	<?php $__currentLoopData = $read_info_foreach; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($value->employee_id); ?></td>
			<td><?php echo e($value->name); ?></td>
			<td><?php echo e($value->position); ?></td>
			<td><?php echo e($value->salary); ?></td>
			<td><button><a href="<?php echo e(URL::to('/delete_info/'.$value->employee_id)); ?>" class="btn btn-success">DELETE</a></button></td>
		    <td><button><a href="<?php echo e(URL::to('/edit_info/'.$value->employee_id)); ?>" class="btn btn-success">UPDATE</a></button></td>

		</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</tbody>
</table>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>