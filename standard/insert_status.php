<?php
if (isset($_POST) && !empty($_POST)) {
    function utf8toThai($str){
        return iconv('utf-8','tis-620',$str);
    }
    foreach($_POST as $key => $value){
        eval(sprintf('$%s="%s";',$key,
        utf8toThai($value)));
    } 
$sql ="SELECT * FROM "
}
?>