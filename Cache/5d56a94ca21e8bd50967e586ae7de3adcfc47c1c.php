<?php $__env->startSection("content"); ?>
    <form name="newBlog" method="post" action="index.php">
    <div class="input-group flex-nowrap">
        <input type="text" class="form-control" placeholder="Blog name" aria-label="BlogName" aria-describedby="addon-wrapping" name="blogname">
    </div>
    <div class="input-group">
        <textarea class="form-control" aria-label="Blog" name="blog"></textarea>
    </div>
        <input type="submit" name="editing" value="Edit">
    </form>
<?php $__env->stopSection(); ?>
<?php $__env->startSection("sidebar"); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/developer/workspace/test.loc/Views/blog.blade.php ENDPATH**/ ?>