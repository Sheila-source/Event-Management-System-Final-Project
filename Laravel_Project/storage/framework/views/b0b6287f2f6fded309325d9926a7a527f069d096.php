

<?php $__env->startSection('title'); ?>
  Add Event
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="mt-5 mb-5 mx-auto w-50 rounded border border-secondary border-2">
      <h4 class="mt-4 mb-4 text-primary text-center"><b>Add Event</b></h4>
      <form action="<?php echo e(route('events.store')); ?>" method="post">
      <?php echo csrf_field(); ?>
      <?php echo method_field('post'); ?>
      <div class="ms-5 me-5 form-group">
        <div class="ms-5 me-5 mb-4">
          <label class="form-label">Event Name:</label>
          <input type="text" class="form-control w-100" name="event_name" placeholder="Enter event here" required>
        </div>
        <div class="ms-5 me-5 mb-4">
          <label class="form-label">Schedule:</label>
          <input type="date" class="form-control w-100" name="event_sched" required>
        </div>
        <div class="ms-5 me-5 mb-4">
          <label class="form-label">Venue:</label>
          <input type="text" class="form-control w-100" name="event_venue" placeholder="Enter place here" required>
        </div>
        <div class="ms-5 me-5 mb-2">
          <label class="form-label">In charge:</label>
          <input type="text" class="form-control w-100" name="event_incharge" placeholder="Enter name here" required>
        </div>
        <center>
          <a href=""><input type="submit" value="Create" class="create fs-5 fw-bold ms-3 me-3 mt-4 mb-5 btn btn-success rounded"></a>
          <a href="<?php echo e(route('events.index')); ?>"><input type=button value='Cancel' class="cancel fs-5 fw-bold ms-3 me-3 mt-4 mb-5 btn btn-primary rounded"></a>
        </center>
      </div>
      </form>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Nesor Silangon\School\3rd year - 2nd Sem 2021\IT-Elective 1 Sir Ryan\Laravel App\Laravel Project\resources\views/pages/add.blade.php ENDPATH**/ ?>