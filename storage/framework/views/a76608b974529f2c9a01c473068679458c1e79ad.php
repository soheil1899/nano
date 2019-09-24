<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>NANO PAINT</title>


    <link rel="stylesheet" href="/css/app.css">

</head>
<body>
<div id="app">
    <header>
        <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </header>





    <?php echo $__env->yieldContent('content'); ?>




    <footer>
        <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </footer>
</div>
</body>


<script src="/js/app.js"></script>
</html>
<?php /**PATH F:\web\3-98\nanopaint\resources\views/layouts/master.blade.php ENDPATH**/ ?>