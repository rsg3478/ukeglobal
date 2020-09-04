// connect_db.php

<?php

$host = "mysql";
$user = "root";
$password = "123123";
$db_name = "uke_admin";

$connect = new mysqli($host, $user, $password, $db_name);
$connect->set_charset('utf8');

?>