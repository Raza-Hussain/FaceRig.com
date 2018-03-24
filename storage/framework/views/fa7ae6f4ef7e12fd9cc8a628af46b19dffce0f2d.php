<?php $__env->startSection('title'); ?>
  Welcome:
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

  <!--
@ìnclude('includes.message-block')
  <?php if(count($errors) > 0): ?>
    <div class='row'>
      <div class='col-md-4 col-md-offset-4'>
        <ul>
          <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
              <?php echo e($error); ?>

            </li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      </div>
    </div>
  <?php endif; ?>
-->
  <div class = 'row'>
    <div class = 'col-md-6'>
      <h3>Sign Up</h3>
      <form method='post' action='<?php echo e(route("signup")); ?>'>
        <div class='form-group' <?php echo e($errors->has("email") ? 'has-error' : ''); ?>>
          <label for='email'>Your E-Mail</label>
          <input class='form-control' type='text' name='email' id='email' value='<?php echo e(Request::old("email")); ?>' />

          <label for='name'>Your Name</label>
          <input class='form-control' type='text' name='username' id='username' value='<?php echo e(Request::old("username")); ?>' />

          <label for='password'>Your Password</label>
          <input class='form-control' type='password' name='password' id='password' value='<?php echo e(Request::old("password")); ?>'/>

        </div>
        <button class='btn btn-primary' type='submit'>Submit</button>
        <input type="hidden" name="_token" value="<?php echo e(Session::token()); ?>"/>
      </form>
    </div>


      <div class = 'col-md-6'>
      <h3>Sign In</h3>
      <form method='post' action='<?php echo e(route("signin")); ?>'>
        <div class='form-group'>
          <label for='email'>Your E-Mail</label>
          <input class='form-control' type='text' name='email' id='email'  value='<?php echo e(Request::old("email")); ?>'/>

          <label for='password'>Your Password</label>
          <input class='form-control' type='password' name='password' id='password' value='<?php echo e(Request::old("password")); ?>'/>

        </div>
        <button class='btn btn-primary' type='submit'>Submit</button>
        <input type="hidden" name="_token" value="<?php echo e(Session::token()); ?>"/>
      </form>

    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>