<?php $__env->startSection('content'); ?>


  
        <div class="container-fluid ">
            <div class="row content">
                <div class="col-sm-2 sidenav">
                <h4>
                <p><a href="./moufirst">หน้าแรกระบบ</a><br></p>
            </h4>
            <!-- <h5>
                <p> <a href="./mouIn">เพิ่มโครงการพัฒนาวิชาการ</a><br></p>
            </h5>
            <h5>
                <p><a href="./customer">เพิ่มข้อมูลผู้รับบริการ</a><br></p>
            </h5>
            <h5>
                <p><a href="./search_project">ค้นหาข้อมูลโครงการพัฒนาวิชาการ</a><br></p>
            </h5>
            <h5>
                <p><a href="./search_service">ค้นหาข้อมูลโครงการบริการ</a><br></p>
            </h5>
            <h5>
                <p><a href="./recipe">การบันทึกใบเสร็จ</a><br></p>
            </h5> -->
                </div>



                <div class="col-sm-8 main">
                  <div class="w3-row w3-padding-64">
                    <div class="w3-twothird w3-container">
                      <h1 class="w3-text-teal">เพิ่มข้อมูลผู้รับบริการ</h1>
                      <div class="form-group">
                        <label for="usr">ชื่อผู้รับบริการ:</label>
                        <input type="text" class="form-control" id="usr">
                      </div>
                      <div class="form-group">
                        <label for="usr">ที่อยู่:</label>
                        <input type="text" class="form-control" id="usr">
                      </div>

                      <div class="form-group">
                        <label for="usr">เลขประจำตัวผู้เสียภาษี:</label>
                        <input type="text" class="form-control" id="usr">
                      </div>

                      <div class="form-group">
                        <label for="sel1">สถานภาพ:</label>
                        <select class="form-control" id="sel1">
                          <option>ราชการ</option>
                          <option>เอกชน</option>
                          <option>รัฐวิสาหกิจ</option>
                          <option>องค์การมหาชน</option>
                        </select>
                      </div>

                        <a href="confirm.html"><input type="button" value="submit" class="btn btn-default"></a>
                  </div>
                </div>
                </div>
                <div class="col-sm-2 sidenav"></div>
            </div>
        </div>
   
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('footer'); ?>
    
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.ProjectandService_app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>