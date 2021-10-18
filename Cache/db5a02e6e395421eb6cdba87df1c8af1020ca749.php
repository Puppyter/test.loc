<!doctype html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>test.loc</title>
</head>
<body>
<div class="container">
    <?php $__env->startSection("upper"); ?>
        <div class="row">
            <div class="col">col</div>
            <div class="col">col</div>
            <div class="col">col</div>
            <div class="col">col</div>
        </div>
    <?php echo $__env->yieldSection(); ?>
    <div class="row">
            <div class="col-">
                <?php $__env->startSection("sidebar"); ?>
                col-4
                <?php echo $__env->yieldSection(); ?>
            </div>
        <?php echo $__env->yieldContent("content"); ?>
    </div>
</div>
</body><?php /**PATH /home/developer/workspace/test.loc/Views/layouts/layout.blade.php ENDPATH**/ ?>