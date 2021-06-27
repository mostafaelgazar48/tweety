<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body>
    <div id="app" >
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="http://localhost:81/tweety/public/images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
                Tweety
            </a>

        </nav>
        <main class="container" >

            <div class="row">
                <div class="col-sm-3 col-md-3">
                    <?php if(auth()->check()): ?>
                    <?php echo $__env->make('sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endif; ?>
                </div>

                <div class="col-sm-8 col-md-<?php echo e((auth()->check()?'6':'12')); ?>" >
                  <?php echo $__env->yieldContent('content'); ?>
                </div>
                <div class="col-sm-5 col-md-3">
                    <?php if(auth()->check()): ?>

                    <?php echo $__env->make('friends', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endif; ?>
                </div>
            </div>
        </main>
    </div>
</body>

<?php echo $__env->yieldContent('scripts'); ?>
</html>
<?php /**PATH /opt/lampp/htdocs/tweety/resources/views/layouts/app.blade.php ENDPATH**/ ?>