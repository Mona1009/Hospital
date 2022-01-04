<!DOCTYPE html>
<html lang="en">
  <head>

   <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Required meta tags -->
   </head>
   <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->

      <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- partial -->

      <?php echo $__env->make('admin.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- partial -->

     <div class="container-fluid page-body-wrapper">

     	<div align="center" style="padding-top: 100px;">

     		<table>
     			<tr style="background-color: black;">
     				<th style="padding: 10px;">Customer name</th>
     				<th style="padding: 10px;">Email</th>
     				<th style="padding: 10px;">Phone</th>
     				<th style="padding: 10px;">Doctor name</th>
     				<th style="padding: 10px;">Date</th>
     				<th style="padding: 10px;">Message</th>
     				<th style="padding: 10px;">Status</th>
					<th style="padding: 10px;">Approved</th>
					<th style="padding: 10px;">Canceled</th>

     						
     			</tr>

     			<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appoint): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

     			<tr align="center" style="background-color:skyblue;">
     				<td><?php echo e($appoint->name); ?></td>
     				<td><?php echo e($appoint->email); ?></td>
     				<td><?php echo e($appoint->phone); ?></td>
     				<td><?php echo e($appoint->doctor); ?></td>
     				<td><?php echo e($appoint->date); ?></td>
     				<td><?php echo e($appoint->message); ?></td>
     				<td><?php echo e($appoint->status); ?></td>
     				<td>
     					<a class="btn btn-success" href="<?php echo e(url('approved',$appoint->id)); ?>">Approved</a>
     				</td>
     				<td>
     					<a class="btn btn-danger" href="<?php echo e(url('canceled',$appoint->id)); ?>">Canceled</a>
     				</td>

     			</tr>

     			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

     		</table>
     	</div>


     </div>
    
    <!-- container-scroller -->
    <!-- plugins:js -->

  <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  
    <!-- End custom js for this page -->
  </body>
</html>
<?php /**PATH E:\Mona\Project\Hospital\resources\views/admin/showappointment.blade.php ENDPATH**/ ?>