
        <!-- partial -->
<div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Make an Appointment</h1>

     <form class="main-form" action="<?php echo e(url('appointment')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" class="form-control" name="name" placeholder="Full name">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" class="form-control" name="email" placeholder="Email address..">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" name="data" class="form-control">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="doctor" id="departement" class="custom-select">
                <option>--- select doctor----</option>
                <?php $__currentLoopData = $doct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $in): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

              <option value=" <?php echo e($in->name); ?>"><?php echo e($in->name); ?>  ---Speciality---<?php echo e($in->Speciality); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" name="phone" class="form-control" placeholder="Number..">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
          </div>

        </div>

        <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
      </form>
      <?php if($errors->any()): ?>
      <span style="color:red;"><h4><?php echo e($errors->first()); ?></h4></span>
      <?php endif; ?>
    </div>
  </div> <!-- .page-section -->
<?php /**PATH D:\hospital\resources\views/Appointment.blade.php ENDPATH**/ ?>