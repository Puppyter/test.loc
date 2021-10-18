<?php $__env->startSection("content"); ?>
        <h1>Index</h1>
<?php $__env->stopSection(); ?>
<?php $__env->startSection("sidebar"); ?>
    <input type="button" name="newBlog" value="Add new blog">
<?php $__env->stopSection(); ?>


<?php echo $__env->make("layouts.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/developer/workspace/test.loc/Views/index.blade.php ENDPATH**/ ?>