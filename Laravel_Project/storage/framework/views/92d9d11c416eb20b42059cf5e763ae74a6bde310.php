

<?php $__env->startSection('title'); ?>
  View Event
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <div class="mt-5 mb-5 mx-auto border border-secondary border-2" style="width: 650px;">
    <h3 class="mt-4 mb-4 text-primary text-center"><b><?php echo e($event->event_column); ?></b></h3>
    <h5 class="mb-2 text-center">Schedule: <?php echo e($event->schedule); ?></h5>
    <h5 class="mb-2 text-center">Venue: <?php echo e($event->venue); ?></h5>
    <h5 class="mb-2 text-center">In charge: <?php echo e($event->in_charge); ?></h5>
    <center>
      <a class="back p-2 mt-4 mb-5 fs-5 text-decoration-none rounded badge bg-primary" href="<?php echo e(route('events.index')); ?>">Back</a>
    </center>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Nesor Silangon\School\3rd year - 2nd Sem 2021\IT-Elective 1 Sir Ryan\Laravel App\Laravel Project\resources\views/pages/event.blade.php ENDPATH**/ ?>