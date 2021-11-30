
<?php require('css/regis.php'); ?> 
<div class="border rounded-2 border-2 bg-success text-white">
    <h1 class="mg-t">เพิ่มเอกสารที่ยื่นขอ มอก. </h1> 
</div>


<body class="font ">
    <div class="container card-regis">
        <div class="container  font">
        <form method="post" action="">
            
            <div class="grid-4 pd-t">
                <label>แหล่งที่มาเอกสาร</label>
                <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id=" disabledChecked" name="EDTextbox" value="disabled">
                    <label class="custom-control-label" for="disabledChecked">จากการประชุม</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="enabledChecked" name="EDTextbox" value="enabled" checked>
                    <label class="custom-control-label" for="enabledChecked">จากจดหมายสมอ.</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="enabledChecked" name="EDTextbox" value="enabled" checked>
                    <label class="custom-control-label" for="enabledChecked">จากราชกิจจานุเบกษา</label>
                </div>
            </div>
            <br>
            <!-- <div class="input1 grid">
                <div>
                    <label> ชื่อหน่วยงาน </label>
                    <input type="text" name="name_com" class="form-control" autocomplete="off">
                </div>
                <div>
                    <label> ตำแหน่ง </label>
                    <input type="text" name="position" class="form-control" autocomplete="off">
                </div>
                <div>
                    <label> ระบุประเภทกิจการ </label>
                    <select name="type_com" class="form-control">
                        <option value="" selected disabled>-กรุณาเลือก-</option>
                        <option value="กิจการคนเดียว">กิจการคนเดียว</option>
                        <option value="กิจการห้างหุ้นส่วน">กิจการห้างหุ้นส่วน</option>
                        <option value="บริษัทจำกัด">บริษัทจำกัด</option>
                        <option value="บริษัทมหาชนจำกัด">บริษัทมหาชนจำกัด</option>
                    </select>
                </div>
            </div> -->
            <br>

            <br>
            <div class="grid ">
                <!-- <div class="">
                    <label for="sel1">คำนำหน้าชื่อ:</label>
                    <select class="form-control">
                        <option value="" selected disabled>-กรุณาเลือก-</option>
                        <option value="นาย">นาย</option>
                        <option value="นาย">นางสาว</option>
                        <option value="นาย">นาง</option>
                    </select>
                </div> -->

                <!--เก็บข้อมุล
                  standard_id รันปกติ -->

                <div class="">
                    <label> วาระจากที่ประชุม </label>
                    <input type="text" name="name" class="form-control" autocomplete="off" >
                </div>
                <div class="f-red">
                    <label> เลขที่ มอก.* </label>
                    <input type="text" name="lastname" class="form-control" autocomplete="off" required>
                </div>
                <div class="f-red">
                    <label> ประเภทผลิตภัณฑ์*  </label>
                    <input type="text" name="lastname" class="form-control" autocomplete="off" required>
                </div>
                <div class="">
                    <label>กลุ่มผลิตภัณฑ์ </label>
                    <input type="text" name="lastname" class="form-control" autocomplete="off">
                </div>
                <div class="">
                    <label> ชื่อมาตรฐาน </label>
                    <input type="text" name="telephone" class="form-control" autocomplete="off">
                </div>
                <div class="">
                    <label> หน่วยงานที่สามารถทดสอบได้ </label>
                    <input type="text" name="id_card" class="form-control" autocomplete="off">
                </div>
                <div class="">
                    <label> มาตรฐานบังคับ </label>
                    <input type="text" name="id_card" class="form-control" autocomplete="off">
                </div>
                <div class="">
                    <label> หน่วยงานที่ขอ </label>
                    <input type="text" name="h_num" class="form-control" autocomplete="off">
                </div>
                <!-- <div class="">
                    <label> เอกสารแนบ </label>
                    <input type="text" name="h_num" class="form-control" autocomplete="off">
                </div> -->
                
        
                <div class="">
                    <label> หมายเหตุเลข tracking </label>
                    <input type="text" name="h_num" class="form-control" autocomplete="off">
                </div>

                <div>
                    <input type="file" id="myFile" name="filename">
                <input type="submit">
                </div>
            
            </div>
            <hr>
            <div class="grid">
                <div>
                    <p>จากการประชุม</p> 
                </div>
                <div class="">
                    <label> ที่มา (ชื่อการประชุม/วาระ) </label>
                    <input type="text" name="h_num" class="form-control" autocomplete="off">
                </div>
                <div class="">
                    <label>ส่งแบบสำรวจล่วงหน้าแล้ว</label>
                    <input type="text" name="h_num" class="form-control" autocomplete="off">
                </div>
            </div>
            <hr>
            <div class="grid">
                <div>
                    <p>จากจดหมายสมอ.</p> 
                </div>
                <div class="">
                    <label> รับหนังสือจากสมอ. (ระบุวันที่) </label>
                    <input type="date" name="h_num" class="form-control" autocomplete="off">
                </div>
                <div class="">
                    <label>วันที่ส่งเอกสารออกไปสมอ. (ระบุวันที่)</label>
                    <input type="date" name="h_num" class="form-control" autocomplete="off">
                </div>
            </div>
            <hr>
            <div class="grid">
                <div>
                    <p>จากราชกิจจานุเบกษา</p> 
                </div>
                <div class="">
                    <label> หน่วยงานคู่แข่ง </label>
                    <input type="text" name="h_num" class="form-control" autocomplete="off">
                </div>
                <div class="">
                    <label>วันที่ประกาศราชกิจจานุเบกษา (ระบุวันที่)</label>
                    <input type="date" name="h_num" class="form-control" autocomplete="off">
                </div>
            </div>
            
            <center>
                <div class="bt">
                    <!-- <input type="checkbox" name="chkColor1" value="Red">กรุณายอมรับและเงื่อนไขสำหรับการสมัครสมาชิก -->

                    <!-- <button type="submit" class="btn btn-danger">รับรหัส otp</button> -->
                    <button type="submit" class="btn btn-primary bt mg-t-bt">เพิ่มข้อมูล</button>
                </div>
            </center>
        </form>
    </div>
    </div>
<!-- <a href=""><img src="https://www2.tistr.or.th/tistrservices/training/images/logo2.png" class="logo"></a> -->
    
</body>




  