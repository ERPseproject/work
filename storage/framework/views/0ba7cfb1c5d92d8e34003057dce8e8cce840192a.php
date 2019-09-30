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
        .main {
            margin-top: 50px;
        }

        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        .navbar {
            padding-top: 17px;
            padding-bottom: 17px;
        }

        .sidenav {
            padding-top: 20px;
            background-color: #d3d0d0;
            height: 100%;
        }

        footer {
            background-color: #8B0000;
            color: white;
            padding: 15px;
            bottom: 0;
            margin-bottom: 0%;
            width: 100%;
            position: fixed;

        }

        .row.content {
            height: 800px
        }

        @media  screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }

            .row.content {
                height: auto;
            }
        }
    </style>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark navbar-laravel" style="background-color:#800000;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Logo Web</a>
                <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button> -->

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="active"><a href="home">Home</a></li>
                    </ul>


                </div>
            </div>
        </nav>

        <main>
    
            <?php echo $__env->yieldContent('content'); ?>
        </main>
        <footer class="container-fluid text-center">
            <?php echo $__env->yieldContent('footer'); ?>
            <h6>footer</h6>
        </footer>
    </div>
</body>

</html>