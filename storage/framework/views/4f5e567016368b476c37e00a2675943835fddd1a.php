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
                    <th style="padding:10px">Doctor name</th> <th style="padding:10px">Phone</th>
                    <th style="padding:10px">Specility</th>
                    <th style="padding:10px">Room No</th>
                    <th style="padding:10px">Image</th>
                  </tr>
                </table>


                </div>
           </div>

    <!-- container-scroller -->
       <?php echo $__env->make('script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End custom js for this page -->
  </div>
  </body>
</html><?php /**PATH D:\hospital\resources\views/showdoctor.blade.php ENDPATH**/ ?>