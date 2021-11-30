<?php require('connect.php'); ?>
<?php
// $sql = "SELECT * FROM tb_master";
// $query = sqlsrv_query($conn, $sql, array(), array("Scrollable" => 'static'));
// $nums = sqlsrv_num_rows($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7192e20355.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mitr&display=swap" rel="stylesheet">   

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>ระบบติดตามงานมาตรา 5</title>
    <style>
        body {
            font-family: 'Mitr', sans-serif;
            
        }

        .bg-lightinfo {
            background-color: lightblue;
        }

        a:link {
            color: lightskyblue;
        }

        /* visited link */
        a:visited {
            color: black;
        }

        /* selected link */
        a:active {
            color: lightskyblue;
        }
    </style>
</head>

<body>
    <center>
    <div class=" p-5 my-5 bg-dark text-white" style="background-image:url(002.jpg);">
        <h2 class="">ระบบติดตามงานมาตรา 5</h2>
    </div>
    <div class="container-fluid bg-white ">
        <ul class="nav nav-tabs justify-content-center" role="tablist">
            <li class="nav-item">
                <a class="nav-link active " data-bs-toggle="tab" href="#home"><dt>หน้าแรก</dt></a>
            </li>
            <li class="nav-item">
                <a class="nav-link " data-bs-toggle="tab" href="#add"><dt>เพิ่มเอกสาร มอก.</dt></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#status"><dt>แก้ไขสถานะเอกสาร</dt></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#report"><dt>รายงาน</dt></a>
            </li>
            
        </ul>
    </div>
    </center>
    <div class="  tab-content">
        <div id="home" class="container-fluid tab-pane active m-2">
            <div class="border rounded-2 border-2 bg-info text-white ">
                <h1 class="mg-t">เอกสารที่ยื่นขอ มอก. ทั้งหมด</h1>
            </div>
            <table class="table table-striped mg-t">
    <thead>
      <tr>
        <th>ลำดับที่</th>
        <th>วาระจากในที่ประชุมสมอ.</th>
        <th>เลขที่มอก.</th>
        <th>ชื่อมาตรฐาน</th>
        <th>หน่วยงานที่สามารถทดสอบได้</th>
        <th>มาตรฐานบังคับ</th>
        <th>หน่วยงานที่ขอ</th>
        <th>วันที่แต่งตั้ง</th>
        <th>สถานะ</th>
        <th>เลขเอกสารที่เกี่ยวข้อง</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>4.1</td>
        <td>มอก. 2243-25xx</td>
        <td>ลวดเหล็กกล้าดึงเย็นเสริมคอนกรีต</td>
        <td>1. กรมวิทยาศาสตร์บริการ<br>
        2. กรมส่งเสริมอุตสาหกรรม<br>
        3. สถาบันวิจัยวิทยาศาสตร์และเทคโนโลยีแห่งประเทศไทย<br>
        4. สถาบันเหล็กและเหล็กกล้าฯ แห่งประเทศไทย
        </td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
      </tr>

      <tr>
        <td>2</td>
        <td>4.1</td>
        <td>มอก. 2243-25xx</td>
        <td>ลวดเหล็กกล้าดึงเย็นเสริมคอนกรีต</td>
        <td>1. กรมวิทยาศาสตร์บริการ<br>
        2. กรมส่งเสริมอุตสาหกรรม<br>
        3. สถาบันวิจัยวิทยาศาสตร์และเทคโนโลยีแห่งประเทศไทย<br>
        4. สถาบันเหล็กและเหล็กกล้าฯ แห่งประเทศไทย
        </td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
      </tr>

      <tr>
        <td>3</td>
        <td>4.1</td>
        <td>มอก. 2243-25xx</td>
        <td>ลวดเหล็กกล้าดึงเย็นเสริมคอนกรีต</td>
        <td>1. กรมวิทยาศาสตร์บริการ<br>
        2. กรมส่งเสริมอุตสาหกรรม<br>
        3. สถาบันวิจัยวิทยาศาสตร์และเทคโนโลยีแห่งประเทศไทย<br>
        4. สถาบันเหล็กและเหล็กกล้าฯ แห่งประเทศไทย
        </td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
      </tr>

      <tr>
        <td>4</td>
        <td>4.1</td>
        <td>มอก. 2243-25xx</td>
        <td>ลวดเหล็กกล้าดึงเย็นเสริมคอนกรีต</td>
        <td>1. กรมวิทยาศาสตร์บริการ<br>
        2. กรมส่งเสริมอุตสาหกรรม<br>
        3. สถาบันวิจัยวิทยาศาสตร์และเทคโนโลยีแห่งประเทศไทย<br>
        4. สถาบันเหล็กและเหล็กกล้าฯ แห่งประเทศไทย
        </td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
      </tr>

      <tr>
        <td>5</td>
        <td>4.1</td>
        <td>มอก. 2243-25xx</td>
        <td>ลวดเหล็กกล้าดึงเย็นเสริมคอนกรีต</td>
        <td>1. กรมวิทยาศาสตร์บริการ<br>
        2. กรมส่งเสริมอุตสาหกรรม<br>
        3. สถาบันวิจัยวิทยาศาสตร์และเทคโนโลยีแห่งประเทศไทย<br>
        4. สถาบันเหล็กและเหล็กกล้าฯ แห่งประเทศไทย
        </td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
      </tr>

      <tr>
        <td>6</td>
        <td>4.1</td>
        <td>มอก. 2243-25xx</td>
        <td>ลวดเหล็กกล้าดึงเย็นเสริมคอนกรีต</td>
        <td>1. กรมวิทยาศาสตร์บริการ<br>
        2. กรมส่งเสริมอุตสาหกรรม<br>
        3. สถาบันวิจัยวิทยาศาสตร์และเทคโนโลยีแห่งประเทศไทย<br>
        4. สถาบันเหล็กและเหล็กกล้าฯ แห่งประเทศไทย
        </td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
      </tr>

      <tr>
        <td>7</td>
        <td>4.1</td>
        <td>มอก. 2243-25xx</td>
        <td>ลวดเหล็กกล้าดึงเย็นเสริมคอนกรีต</td>
        <td>1. กรมวิทยาศาสตร์บริการ<br>
        2. กรมส่งเสริมอุตสาหกรรม<br>
        3. สถาบันวิจัยวิทยาศาสตร์และเทคโนโลยีแห่งประเทศไทย<br>
        4. สถาบันเหล็กและเหล็กกล้าฯ แห่งประเทศไทย
        </td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
      </tr>

      <tr>
        <td>8</td>
        <td>4.1</td>
        <td>มอก. 2243-25xx</td>
        <td>ลวดเหล็กกล้าดึงเย็นเสริมคอนกรีต</td>
        <td>1. กรมวิทยาศาสตร์บริการ<br>
        2. กรมส่งเสริมอุตสาหกรรม<br>
        3. สถาบันวิจัยวิทยาศาสตร์และเทคโนโลยีแห่งประเทศไทย<br>
        4. สถาบันเหล็กและเหล็กกล้าฯ แห่งประเทศไทย
        </td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
      </tr>

      <tr>
        <td>9</td>
        <td>4.1</td>
        <td>มอก. 2243-25xx</td>
        <td>ลวดเหล็กกล้าดึงเย็นเสริมคอนกรีต</td>
        <td>1. กรมวิทยาศาสตร์บริการ<br>
        2. กรมส่งเสริมอุตสาหกรรม<br>
        3. สถาบันวิจัยวิทยาศาสตร์และเทคโนโลยีแห่งประเทศไทย<br>
        4. สถาบันเหล็กและเหล็กกล้าฯ แห่งประเทศไทย
        </td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
      </tr>
     
    </tbody>
  </table>
        </div>
        <div id="add" class="container-fluid tab-pane fade m-2">
            <div >
            
                <?php include('add.php'); ?>
            </div>
        </div>
        <div id="status" class="container-fluid tab-pane fade m-2">
            <div>
                <?php include('status.php'); ?>
            </div>
        </div>
        <div id="report" class="container-fluid tab-pane fade m-2">
            <div >
                <?php require('report.php'); ?>
            </div>
        </div>
       

    </div>
</body>

</html>