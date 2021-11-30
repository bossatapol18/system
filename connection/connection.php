<?php
$serverName = "DESKTOP-R0ETL6G";
$user = "pluem";
$pass = "1234";


$connectionInfo = array( "Database"=>"Project", "UID"=>$user, "PWD"=>$pass);
$conn = sqlsrv_connect( $serverName, $connectionInfo);


if( $conn ) {
      echo "GOOD!!"; 
}else{
     echo "BAD!!"; 
     die( print_r( sqlsrv_errors(), true)); 
          sqlsrv_query("SET character_set_results=utf8");
     sqlsrv_query("SET character_set_client='utf8'");
     sqlsrv_query("SET character_set_connection='utf8'");
     sqlsrv_query("collation_connection = utf8_unicode_ci");
     sqlsrv_query("collation_database = utf8_unicode_ci");
     sqlsrv_query("collation_server = utf8_unicode_ci");
     }


?>