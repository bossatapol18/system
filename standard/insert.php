<?php include('insert_stan.php'); ?>
<?php
while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)){
 $standard_meet = iconv("tis-620" , "utf-8" , $result["standard_meet"]);
 $standard_number = iconv("tis-620" , "utf-8" , $result["standard_number"]);
 $standard_detail = iconv("tis-620" , "utf-8" , $result["standard_detail"]);
 $standard_mandatory = iconv("tis-620" , "utf-8" , $result["standard_mandatory"]);
 $agency_id = iconv("tis-620" , "utf-8" , $result["agency_id"]);
 $department_id = iconv("tis-620" , "utf-8" , $result["department_id"]);
 $type_id = iconv("tis-620" , "utf-8" , $result["type_id"]);
 $group_id = iconv("tis-620" , "utf-8" , $result["group_id"]);
}
?>
<div class="tab-content">
    <div id="home" class="container-fluid tab-pane active m-2">
        <div class="border rounded-2 border-2 bg-danger text-white ">
            <h1 class="mg-t">เพิ่มเอกสารที่ยื่นขอ มอก.</h1>
        </div>
        <div class="container">
            <form action="" method="post" meta http-equiv="Content-Type" content="text/html; charset=Windows-874">
                <div class="container1">
                    <div class='col-sm-12' style="margin-bottom: 25px;">
                        <br>
                        <br>
                        <br>
                        <div class="grid ">
                            <div class="">
                                <label> วาระจากที่ประชุม </label>
                                <input type="text" name="standard_meet" class="form-control" autocomplete="off">
                            </div>
                            <div class="f-red">
                                <label> เลขที่ มอก.* </label>
                                <input type="text" name="standard_number" class="form-control" autocomplete="off">
                            </div>
                            <div class="f-red">
                            <label class="form-label">ประเภทผลิตภัณฑ์</label>
                            <select class="form-control" name="type_id" style="height: unset !important;">
                                <option value="" selected disabled>ประเภทผลิตภัณฑ์</option>
                                <?php while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) {
                                      $type_id = iconv("tis-620" , "utf-8" , $result["type_id"]);
                                      $type_name = iconv("tis-620" , "utf-8" , $result["type_name"]); ?>
                                <option value="<?=$type_id?>"><?=$type_name?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="f-red">
                            <label class="form-label">กลุ่มผลิตภัณฑ์</label>
                            <select class="form-control" name="group_id" style="height: unset !important;">
                                <option value="" selected disabled>กลุ่มผลิตภัณฑ์</option>
                                <?php while($result = sqlsrv_fetch_array($query1, SQLSRV_FETCH_ASSOC)) {
                                      $group_id = iconv("tis-620" , "utf-8" , $result["group_id"]);
                                      $group_name = iconv("tis-620" , "utf-8" , $result["group_name"]); ?>
                                <option value="<?=$group_id?>"><?=$group_name?></option>
                                <?php } ?>
                            </select>
                        </div>
                            <div class="">
                                <label> ชื่อมาตรฐาน </label>
                                <input type="text" name="standard_detail" class="form-control" autocomplete="off">
                            </div>
                            <div class="">
                                <label> หน่วยงานที่สามารถทดสอบได้ </label>
                                <input type="text" name="agency_id" class="form-control" autocomplete="off">
                            </div>
                            <div class="">
                                <label> มาตรฐานบังคับ </label>
                                <input type="text" name="standard_mandatory" class="form-control" autocomplete="off">
                            </div>
                            <div class="">
                                <label> หน่วยงานที่ขอ </label>
                                <input type="text" name="department_id" class="form-control" autocomplete="off">
                            </div>
                            <div class="">
                                <label> หมายเลข tracking </label>
                                <input type="text" name="" class="form-control" autocomplete="off">
                            </div>
                            <div class="">
                                <label> หมายเหตุ </label>
                                <input type="text" name="" class="form-control" autocomplete="off">
                            </div>

                            <div>
                                <label> แนบไฟล์ </label>
                                <input type="file" id="myFile" name="filename">
                            </div>

                        </div>
                        <hr>
                        <div class="grid">
                            <div>
                                <p>จากการประชุม</p>
                            </div>
                            <div class="text">
                                <div class="">
                                    <label> ที่มา (ชื่อการประชุม/วาระ) </label>
                                    <input type="text" name="text1" class="form-control" autocomplete="off">
                                </div>
                                <div class="">
                                    <label>ส่งแบบสำรวจล่วงหน้าแล้ว</label>
                                    <input type="text" name="text3" class="form-control" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="grid">
                            <div>
                                <p>จากจดหมายสมอ.</p>
                            </div>
                            <div class="form-group">
                                <label> รับหนังสือจากสมอ. (ระบุวันที่) </label>
                                <input type="date" name="text2" class="form-control" autocomplete="off">
                            </div>
                            <div class="">
                                <label>วันที่ส่งเอกสารออกไปสมอ. (ระบุวันที่)</label>
                                <input type="date" name="text" class="form-control" autocomplete="off">
                            </div>
                        </div>
                        <hr>
                        <div class="grid">
                            <div>
                                <p>จากราชกิจจานุเบกษา</p>
                            </div>
                            <div class="text">
                                <div class="">
                                    <label> หน่วยงานคู่แข่ง </label>
                                    <input type="text" name="h_num" class="form-control" autocomplete="off">
                                </div>
                                <div class="">
                                    <label>วันที่ประกาศราชกิจจานุเบกษา (ระบุวันที่)</label>
                                    <input type="date" name="h_num" class="form-control" autocomplete="off">
                                </div>
                            </div>
                        </div>

                        <center>
                            <div class="bt">
                                <button type="submit" class="btn btn-primary bt mg-t-bt">เพิ่มข้อมูล</button>
                            </div>
                        </center>
            </form>
        </div>
    </div>
</div>