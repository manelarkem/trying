<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Styles -->
        <link href="/css/main.css" rel="stylesheet">
    </head>

    <body>
        <header>
        </header>
        <?php echo $__env->yieldContent('content'); ?>
        </body>
</html>