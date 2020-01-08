<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="jumbotron">
        <h2 style="text-align: center;">Welcome</h2>
        
    </div>
</div>
<div class="container">
    <div>
        <form action="<?php echo e(route('add-story')); ?>" method="post">
      <?php echo csrf_field(); ?>
            <p>Title</p>
            <input type="text" name="title"><br><br>
            <p>Post</p>
            <textarea name="description"> </textarea><br><br>
      <input type="radio" name="typeofnews" value="Trending">Trending<br>
      <input type="radio" name="typeofnews" value="Sports">Sports<br>
      <input type="radio" name="typeofnews" value="News">News<br>
            <br>
      <button type="submit" class="btn btn-primary">Save</button>

        </form>
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/dave-second/resources/views/home1.blade.php ENDPATH**/ ?>