

<?php $__env->startSection('title'); ?>
  Event list
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <div class="container">
    <h1 class="text-primary"></h1>
    <div class="container mt-5 border border-secondary border-2">
      <h3 class="mt-3 text-primary text-center"><b>Events Management System</b></h3>
      <a href="<?php echo e(route('events.create')); ?>" class="plus ms-3 mb-3 fs-5 fw-bold text-decoration-none rounded-circle badge bg-primary">+</a>
      <div class="row">
        <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="column">
          <div class="card">

            <!--<form class="align-self-end" action="<?php echo e(route('events.destroy', $event->id)); ?>" method="post">
              <?php echo csrf_field(); ?>
              <?php echo method_field('delete'); ?>
              <input class="del fw-bold rounded-circle text-light bg-danger" type="submit" name="submit" value="x" onclick="return confirm('Delete <?php echo e($event->event_column); ?>?')">
            </form>-->

            <input type="button" class="del fw-bold rounded-circle text-light bg-danger align-self-end" data-action="<?php echo e(route('events.destroy', $event->id)); ?>"
              data-bs-toggle="modal" data-bs-target="#deleteCategory" value="x">

            <h3 class="event mb-4 fw-bold"><?php echo e($event->event_column); ?></h3>
            <div class="buttons mb-3">
              <a class="view me-3 fw-bold btn btn-info text-light" href="<?php echo e(route('events.show', $event->id)); ?>">View</a>
              <a class="edit ms-3 fw-bold btn btn-primary" href="<?php echo e(route('events.edit', $event->id)); ?>"> Edit</a>
            </div>
          </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="deleteCategory" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="deleteCategory" aria-hidden="true">
    <div class="mod modal-dialog modal-sm" role="document">
      <form action="/events" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <div class="modal-content bg-info">
          <button type="button" class="close align-self-end" data-bs-dismiss="modal">x</button>
          <div class="modal-body">
            <h3 class="fw-bold text-center text-light">Delete Event?</h3>
          </div>
          <div class="modal-footer mx-auto">
              <button type="submit" class="btn btn-danger border border-light">Delete</button>
              <button type="button" class="btn btn-primary border border-light" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </form>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Nesor Silangon\School\3rd year - 2nd Sem 2021\IT-Elective 1 Sir Ryan\Laravel App\Laravel Project\resources\views/pages/home.blade.php ENDPATH**/ ?>