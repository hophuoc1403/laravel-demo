;

<?php $__env->startSection('content'); ?>

<div class="form-check">
    <form action="" method="POST">
        <?php echo csrf_field(); ?>
        <div class="row g-3 align-items-center">
            <div class="col-auto">
              <label  for="inputPassword6" class="col-form-label">name</label>
            </div>
            <div class="col-auto">
              <input name="name" type="text" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
            </div>
            <div class="col-auto">
              <label  for="inputPassword6" class="col-form-label">address</label>
            </div>
            <div class="col-auto">
              <input name="address" type="text" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
            </div>
            
          </div>
        <button type="submit" class="btn btn-success">Create</a>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ADMIN\Desktop\laravel\laravel-demo\laravel-v1\resources\views/add.blade.php ENDPATH**/ ?>