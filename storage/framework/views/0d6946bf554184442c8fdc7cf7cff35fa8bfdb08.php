<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>ERP</title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

    <style>
    body
 {
 height: auto;
 margin:  0;
 padding: 0;
 }
 .navbar
 {
    padding-top: 17px;
    padding-bottom: 17px;
 }
 
 footer
 {
   background-color: #8B0000;
   color: white;
   padding: 15px;
   bottom: 0;
   margin-bottom: 0%;
   width: 100%;
   position: fixed;
 
 }
 
</style>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark navbar-laravel" style="background-color:#800000;">
            <div class="container-fluid">
            <a class="navbar-brand" href="#">Logo Web</a>

            </div>
        </nav>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
       
    </footer>
    </div>
</body>

</html>