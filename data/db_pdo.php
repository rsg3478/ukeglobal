<?php
include_once('db_config.php');

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

include_once('query.php');

?>