<?php $__env->startSection('title'); ?>
  Account
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <section class="row new-post">
    <div class="col-md-6 col-md-offset-3">
      <header><h3>Your Account</h3></header>
      <form action="<?php echo e(route('account.save')); ?>" method="post" enctype="multipart/form-data">
        <div class = "form-group">
          <label for="first_name">First Name</label>
          <input type="text" name="username" class="form-control" value="<?php echo e($user->username); ?>" id="username"/>
        </div>
        <div class = "form-group">
          <label for="image">Image only(.jpg)</label>
          <input type="file" name="image" class="form-control" id="image" />
        </div>
        <div>
          <button type="submit" class="btn btn-primary">Save Account</button>
          <input type="hidden" value="<?php echo e(Session::token()); ?>" name="_token" />

        </form>
        </div>
    </div>

  </section>
  <?php if(Storage::disk('local')->has($user->username.'-'.$user->id.'.jpg')): ?>
    <section class="row new-post">
      <div class="col-md-6 col-md-offset-3">
        <img src="<?php echo e(route('account.image',['filename'=>$user->username.'-'.$user->id.'.jpg'])); ?>" alt="" class="img-resposive"/>
      </div>
    </section>
  <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>