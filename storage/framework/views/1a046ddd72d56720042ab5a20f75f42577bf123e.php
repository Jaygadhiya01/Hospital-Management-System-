


<!DOCTYPE html>
<html lang="en">
  <head>
   <?php echo $__env->make('css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <?php echo $__env->make('sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- partial -->
      
      <?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
      <div class="container" align="center" style="padding-top: 90px;">

        <table style="background-color: black;">
          <tr>
            <th style="padding:20px">id</th>
            <th style="padding:20px">name</th>
            <th style="padding:40px">phone </th>
            <th style="padding:20px">Speciality</th>
            <th style="padding:20px">Image</th>
	        </tr>

      	 <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
          	<td><?php echo e($info->id); ?></td>
          	<td><?php echo e($info->name); ?></td>
          	<td><?php echo e($info->phone); ?></td>
          	<td><?php echo e($info->Speciality); ?></td>
          	<td><img src="doctorimage/<?php echo e($info->Image); ?>" alt="image" width="100" height="100" /></td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</div>
</div>
<a href="add_doctor">Add Doctor....</a>

    <!-- container-scroller -->
       <?php echo $__env->make('script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End custom js for this page -->
  </div>
  </body>
</html><?php /**PATH D:\hospital\resources\views/search_doctor.blade.php ENDPATH**/ ?>