<!DOCTYPE html>
<html lang="en">
<?php include('./connection/connection.php');?>
<?php include('./include/head.php');?>
<?php include('./css/css.php');?>
<?php include('./include/script.php');?>
<?php include('./include/menu.php');?>
<body>
    <?php 
      if (!isset($_GET['page']) && empty($_GET['page'])) {
        include('dashboard/index.php');
    } elseif (isset($_GET['page']) && $_GET['page'] == 'index') {
        include('standard/index.php');
    }elseif (isset($_GET['page']) && $_GET['page'] == 'insert') {
        include('standard/insert.php');
    }elseif (isset($_GET['page']) && $_GET['page'] == 'status') {
        include('standard/status.php');
    }elseif (isset($_GET['page']) && $_GET['page'] == 'report') {
        include('standard/report.php');
    }
    ?>
</body>
</html>