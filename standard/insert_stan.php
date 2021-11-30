<?php 
include('./connection/connection.php');
if (iconv("utf-8" , "tis-620", (isset($_POST) && !empty($_POST)))) {
$standard_meet = $_POST["standard_meet"];
$standard_number =  $_POST["standard_number"];
$standard_detail =  $_POST["standard_detail"];
$standard_mandatory =  $_POST["standard_mandatory"];
$agency_id =  $_POST["agency_id"];
$department_id =  $_POST["department_id"];
$type_id = $_POST["type_id"];
$group_id =  $_POST["group_id"];
if (isset($_POST) && !empty($_POST)) {
$sql = "INSERT INTO standard_tb (standard_meet,standard_number,standard_detail,standard_mandatory,agency_id,department_id,type_id,group_id) VALUES (?,?,?,?,?,?,?,?)";
$params = array($standard_meet,$standard_number,$standard_detail,$standard_mandatory,$agency_id,$department_id,$type_id,$group_id);

$stmt = sqlsrv_query( $conn, $sql, $params);
if($stmt == false){
    die(print_r(sqlsrv_errors()));
}else{
    echo "บันทึกข้อมูลสำเร็จ";
}
sqlsrv_close($conn);
}
}
$sql="SELECT * FROM type_tb ";
$query = sqlsrv_query($conn,$sql);

$sql1="SELECT * FROM group_tb ";
$query1 = sqlsrv_query($conn,$sql1);
?>