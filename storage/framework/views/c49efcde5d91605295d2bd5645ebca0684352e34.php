
<!DOCTYPE html>
<html lang="en">
  <head>
    <style type="text/css">
       body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

h2 {
    text-align: center;
}



table {
    width: 100%;
    margin-bottom: 15px;
}

table td {
    padding: 5px;
}

label {
    font-weight: bold;
}

button[type="submit"] {
    display: block;
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    background-color: #007bff;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
}

button[type="submit"]:hover {
    background-color: #0056b3;
}

    </style>
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

                 <?php if(Session::has('failure')): ?>

            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <?php echo e(Session::get('failure')); ?>

            </div>

                <?php endif; ?>





    <form id="add-doctor-form" method="POST" enctype="multipart/form-data">
      <?php echo csrf_field(); ?>
       
        <table>
            <tr>
                <td><label for="doctor-name">Docter name :</label></td>
                <td><input type="text" style="color: black;" name="inputs[0]['name']" placeholder="Write the name" class="form-contol"></td>
            </tr>

            <tr>
                <td><label for="doctor-specialty">phone:</label></td>
                <td> <input type="number" style="color: black;" name="number" placeholder="Write the number"> </td>
            </tr>

            <tr>
                <td><label for="doctor-specialty">Speciality :</label></td>
                <td>   <select name="Speciality" style="color:black;">
                            <option>--select--</option>
                            <option value="skin">skin</option>
                            <option value="heart">heart</option>
                            <option value="eye">eye</option>
                            <option value="nose">nose</option>

                         </select>
                </td>
            </tr>

            <tr>
                <td><label for="doctor-contact">Image:</label></td>
                <td><input type="file" name="image"></td>
            </tr>

                                   <button type="button" name="add" id="add" class="btn btn-success">add more</button>

            <!-- Add more fields as needed -->
        </table>


                       <input type="submit" name="Insert" class="btn btn-success">
    </form>


            <a href="srarch_doctor">search..</a>
            </div>

        </div>

        <script>
            var i = 0;
            $('#add').click(function(){
                ++i;
                $('#table').append(
                     `<tr>
                         <td>
                             <input type="text" name="inuts[`+i+`][name]"  placeholder="Write the name" class="form-contol"/>
                         </td>

                         <td>
                            <button type="button"  class="btn btn-danger remove-table-row">remove </button>
                         </td>   
                       </tr>` );
            });
        </script>

    <!-- container-scroller -->
       <?php echo $__env->make('script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End custom js for this page -->
  </body>
</html><?php /**PATH D:\hospital\resources\views/add_doctor.blade.php ENDPATH**/ ?>