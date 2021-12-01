<?php include('insert_sql.php'); ?>
<div class="tab-content font">
    <div id="home" class="container-fluid tab-pane active m-2">
        <div class="border rounded-2 border-2 bg-danger text-white ">
            <h1 class="mg-t">เพิ่มเอกสารที่ยื่นขอ มอก.</h1>
        </div>
        <form method="post">
            <table class="table table-bordered table-responsive-xl  text-center pt-5" style="width: 100%;" id="tableall">
                <thead>
                    <tr>
                        <th>ลำดับที่</th>
                        <th>วาระจากในที่ประชุมสมอ.</th>
                        <th>เลขที่มอก.</th>
                        <th>ประเภทผลิตภัณฑ์</th>
                        <th>กลุ่มผลิตภัณฑ์</th>
                        <th>ชื่อมาตรฐาน</th>
                        <th>หน่วยงานที่ทดสอบได้</th>
                        <th>มาตรฐานบังคับ</th>
                        <th>หน่วยงานที่ขอ</th>
                        <th>หมายเลข tacking</th>
                        <th>หมายเหตุ</th>
                        <th>แนบไฟล์</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                        <tr class="text-center">
                            <td class="align-middle"><?= $i++; ?></td>
                            <td class="align-middle"><input type="text"  class="form-control" name="standard_meet"  required></td>
                            <td class="align-middle"><input type="text" class="form-control" name="standard_number"  required></td>
                            <td class="align-middle">
                            <select class="form-control" autocomplete="off" name="type_id" style="height: unset !important;">
                            <option value="" selected disabled>ประเภทผลิตภัณฑ์</option>
                                <?php while($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) {
                                      $type_id = iconv("tis-620" , "utf-8" , $result["type_id"]);
                                      $type_name = iconv("tis-620" , "utf-8" , $result["type_name"]); ?>
                            <option value="<?=$type_id?>"><?=$type_name?></option>
                                <?php } ?>
                            </select>
                            </td>
                            <td class="align-middle"><select class="form-control" name="group_id" style="height: unset !important;">
                                <option value="" selected autocomplete="off" disabled>กลุ่มผลิตภัณฑ์</option>
                                <?php while($result = sqlsrv_fetch_array($query1, SQLSRV_FETCH_ASSOC)) {
                                      $group_id = iconv("tis-620" , "utf-8" , $result["group_id"]);
                                      $group_name = iconv("tis-620" , "utf-8" , $result["group_name"]); ?>
                                <option value="<?=$group_id?>"><?=$group_name?></option>
                                <?php } ?>
                            </select></td>
                            <td class="align-middle"><input type="text" class="form-control" name="standard_detail"  required></td>
                            <td class="align-middle">  
                                <select class="form-control" name="agency_id" autocomplete="off" style="height: unset !important;">
                                <option value="" selected disabled>หน่วยงานที่สามารถทดสอบได้</option>
                                <?php while($result = sqlsrv_fetch_array($query2, SQLSRV_FETCH_ASSOC)) {
                                      $agency_id = iconv("tis-620" , "utf-8" , $result["agency_id"]);
                                      $agency_name = iconv("tis-620" , "utf-8" , $result["agency_name"]); ?>
                                <option value="<?=$agency_id?>"><?=$agency_name?></option>
                                <?php } ?>
                            </select></td>
                            <td class="align-middle"><input type="text" class="form-control" name="standard_mandatory"  required></td>
                            <td class="align-middle"> 
                                <select class="form-control" autocomplete="off" name="department_id" style="height: unset !important;">
                                <option value="" selected disabled>หน่วยงานที่ขอ</option>
                                <?php while($result = sqlsrv_fetch_array($query3, SQLSRV_FETCH_ASSOC)) {
                                      $department_id = iconv("tis-620" , "utf-8" , $result["department_id"]);
                                      $department_name = iconv("tis-620" , "utf-8" , $result["department_name"]); ?>
                                <option value="<?=$department_id?>"><?=$department_name?></option>
                                <?php } ?>
                            </select></td>
                            <td class="align-middle"><input type="text" class="form-control" name="standard_tacking"  required></td>
                            <td class="align-middle"><input type="text" class="form-control" name="standard_note"  required></td>
                            <td class="align-middle"><input type="file" class="form-control" name="standard_file"  ></td>
    </tr>
</tbody>
</table>
    <button type="button" id="btn2" class="btn btn-danger bt mg-t-bt input_add">เพิ่มฟอร์ม</button>
    <button type="submit" class="btn btn-primary bt mg-t-bt">เพิ่มข้อมูล</button>
</form>
    </div>
</div>