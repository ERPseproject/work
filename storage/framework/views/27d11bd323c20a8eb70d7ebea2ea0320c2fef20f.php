<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- <div class="card-header"><?php echo e(__('Login')); ?></div> -->

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">


                                <?php if(Route::has('password.request')): ?>
                             
                                <a href="<?php echo e(route('login.provider', 'google')); ?>" class="btn btn-secondary"><?php echo e(__('Google Sign in')); ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app3', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>