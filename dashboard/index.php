<?php
$sql = "SELECT COUNT(standard_number) as count_standard FROM standard_tb";
$query = sqlsrv_query($conn,$sql);
?>

<?php while ($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) : ?>
    <div class="border rounded-2 border-2 bg-primary text-white">
            <h1 class="mg-t">เอกสารทั้งหมด</h1>
            <h1 class="mg-t"><?=$result['count_standard']?></h1>
    </div>

        <div class="border rounded-2 border-2 bg-danger text-white">
            <h1 class="mg-t">เอกสาร รอสถานะ</h1>
            <h1 class="mg-t"><?=$result['count_standard']?></h1>
        </div>
<?php endwhile;?>