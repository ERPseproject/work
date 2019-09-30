@extends('layouts.app')
<style>
    .main
 {
   /* background-color: #8B0000; */
 padding-top: 5%;
 padding-bottom: 5%;
 }
    </style>
@section('content')
<!-- main menu -->
<div class="main">
        <div class="container-fluid ">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4 ">
                    <table width="100%" border="0">
                        <tbody>
                            <tr>
                                <td width="9%" valign="top"><a href="./moufirst"><img src="pic/krongkarn.jpg" width="100" height="100"></a></td>
                                <td width="91%" valign="top">
                                    <h3>
                                        <font color="#000000"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ระบบโครงการ&บริการ</strong></font>
                                    </h3>
                                    <!-- <p>
                                        <font color="#000000">ตรวจสอบโครงการ</font>
                                    </p> -->
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- <h2>&nbsp;</h2> -->
                </div>
                <div class="col-md-4">
                    <table width="100%" border="0">
                        <tbody>
                            <tr>
                                <td width="9%" valign="top"><a href="./kurupan"><img src="pic/karuphan.jpg" width="100" height="100"></a><a href="student/news/good_std48.pdf"></a><a href="disp_cutacc1.asp"></a><a href="disp_ponpan.asp"></a></td>
                                <td width="91%" valign="top">
                                    <h3><strong>
                                            <font color="#000000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ระบบครุภัณฑ์</font>
                                        </strong></h3>
                                    <!-- <p>
                                        <font color="#000000"></font><br>
                                    </p> -->
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- <h2>&nbsp;</h2> -->
                </div>
                <div class="col-md-2"></div>
            </div>
            <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <table width="100%" border="0">
                        <tbody>
                            <tr>
                                <td width="9%" valign="top"><a href="./varasarn"><img src="pic/varasan.jpg" width="100" height="100"></a></td>
                                <td width="91%" valign="top">
                                    <h3><strong>
                                            <font color="#000000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ระบบวารสาร</font>
                                        </strong></h3>
                                    <!-- <p>
                                        <font color="#000000">บันทึกตีพิมพ์ทางวิชาการ</font>
                                    </p> -->
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- <h2>&nbsp;</h2> -->
                </div>

                <div class="col-md-2"></div>
            </div>
        </div>
    </div>
@endsection
@section('footer')

@endsection
