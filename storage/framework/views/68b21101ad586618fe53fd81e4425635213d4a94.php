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
      <div class="container" align="center" style="padding-top: 50px;">

        <table style="background-color: black;">
          <tr>
            <th style="padding:10px">Doctor name</th>
            <th style="padding:10px">Phone</th>
            <th style="padding:10px">Speciality</th>
            <th style="padding:10px">Image</th>
            <th style="padding:10px">delete</th>
            <th style="padding:10px">update</th>
          </tr>
          
           <?php $__currentLoopData = $dot; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr   align="center" style="background-color: skyblue;">
            <td><?php echo e($info->name); ?></td>
            <td><?php echo e($info->phone); ?></td>
            <td><?php echo e($info->Speciality); ?></td>
             <td><img src="doctorimage/<?php echo e($info->Image); ?>" alt="image" width="100" height="100" /></td>

             <td ><a onclick="return confirm('you are sure to delete this doctor')" class="btn btn-danger" href="<?php echo e(url('deletedoctor',$info->id)); ?>">delete</a> </td>

             <td ><a class="btn btn-primary" href="<?php echo e(url('updatedoctor',$info->id)); ?>">update</a> </td>

          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>

      </div>
    </div>
    <!-- container-scroller -->
    <?php echo $__env->make('script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End custom js for this page -->
  </div>
</body>
</html>
<?php /**PATH D:\hospital\resources\views//showdoctor.blade.php ENDPATH**/ ?>