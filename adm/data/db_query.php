<?php
include_once('/data/db_conn.php')

//1. DB 연결
$dsn = 'mysql:host='.$host.';dbname='.$databaseName.';port='.$mysql_port.';charset='.$mysql_charset;

try
{
	$connect = new PDO( $dsn, $databaseUser, $databasePassword);
}
catch ( PDOException $e )
{
	echo 'Connect failed : ' . $e->getMessage() . '';
	return false;
}

//3. 쿼리 실행
function query($sql){  
$result = $connect->query($query) or die($connect->errorInfo());
return $result;
}

?>