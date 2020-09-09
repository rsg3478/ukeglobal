<?php
include "../data/db_config.php";

$connect = new mysqli($host, $databaseUser, $databasePassword, $databaseName);
$connect->set_charset('utf8');
 
function query($sql){  
global $connect;
return $res = $connect->query($sql);
}
?>