<?php $__env->startSection('content'); ?>
    <!--Main content-->

            <div class="container-fluid text-center">
                <div class="row content">
                    <!--side bar-->
                    <div class="col-sm-2 sidenav">
                        <a href="./kurupan">ระบบคุรุภัณฑ์</a>
                    </div>
                    <!--content-->
                    <div class="col-sm-8 main">
                        <h3 class="w3-text-teal">ค้นหาคุรุภัณฑ์</h3>
                        <br>
                        <h4>ใส่ชื่อคุรุภัณฑ์ที่ต้องการค้นหา/จำหน่ายออก</h4>
                        <br/>
                        <form action="<?php echo e(url('/home/getdata')); ?>" id="form" method="post">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <input style ="height: 30px; width: 400px" type="text" name="name">
                        <br/>
                        <div class="menu button">
                            <br/>
                            <br/>
                                <button type="submit" class="btn btn-outline-success"> ค้นหา</button>
                                <button type="button" class="btn btn-outline-danger"><a href="/home">ยกเลิก</a></button>
                        </div>
                    </div>
                    </form>
                    <div class="col-sm-2 sidenav"></div>
                </div>
            </div>
        
    
        <?php $__env->stopSection(); ?>
    <?php $__env->startSection('footer'); ?>
   
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.Kurupan_app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>