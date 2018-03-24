<!DOCTYPE html>
<html lang="<?php echo e(config('app.locale')); ?>">
    <head>
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="<?php echo e(URL::asset("css/boostrap.min.css")); ?>"  />
      <link rel="stylesheet" href="<?php echo e(URL::asset("src/css/main.css")); ?>" />
      <!-- Latest compiled and minified JavaScript -->


      <!--integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">-->

        <title><?php echo $__env->yieldContent('title'); ?></title>

        <!-- Fonts -->

        <!-- Styles -->
    </head>
    <body>
      <?php echo $__env->make('includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <div class = 'container' >
        <?php echo $__env->yieldContent('content'); ?>
      </div>

      <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.0rc1.js"></script>
      <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.0.0rc1.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      <script type="text/javascript" src="<?php echo e(URL::to('src/js/app.js')); ?>"></script>
     <!-- <script type="text/javascript" src="<?php echo e(URL::asset('js/bootstrap.min.js')); ?>" ></script>
-->

    </body>
</html>
