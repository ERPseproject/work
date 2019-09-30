<?php $__env->startSection('content'); ?>


        
            <div class="container-fluid text-center">
                <div class="row content">
                    <div class="col-sm-2 sidenav">
                        <p><a href="./back_varasarn">กรอกข้อมูลวารสาร</a></p>
                        <p><a href="./academic">กรอกข้อมูลประชุมวิชาการ</a></p>
                        <p><a href="./back_show">แสดงวารสาร</a></p>
                        <p><a href="./back_show2">แสดงการประชุมวิชาการ</a></p>
                    </div>
                    <div class="col-sm-8 main">
                        <h1>ประชุมวิชาการ</h1>
                        <br>
                        <table>
                            <tr>
                                <th>ชื่อผู้แต่ง</th>
                                <th>ปี ค.ศ.</th>
                                <th>ชื่อการปะชุม</th>
                                <th>สถานที่</th>
                                <th>เรื่อง</th>
                                <th>ประเทศ</th>
                                <th>PDF</th>
                                <th>Delete</th>
                            </tr>
                            <tr>
                                <td>Jill</td>
                                <td>Smith</td>
                                <td>50</td>
                                <td>Eve</td>
                                <td>Jackson</td>
                                <td>94</td>
                                <td>94</td>
                                <td>
                                    <input type="submit" value="ลบ">
                                </td>
                            </tr>
                            <tr>
                                <td>Jill</td>
                                <td>Smith</td>
                                <td>50</td>
                                <td>Eve</td>
                                <td>Jackson</td>
                                <td>94</td>
                                <td>94</td>
                                <td>
                                    <input type="submit" value="ลบ">
                                </td>
                            </tr>

                        </table>
                    </div>
                    <div class="col-sm-2 sidenav"></div>
                </div>
            </div>
      

            <?php $__env->stopSection(); ?>
    <?php $__env->startSection('footer'); ?>
    <p>footer</p>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.Varasan_app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>