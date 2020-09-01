<?php
include "../data/db_conn.php";

	session_start();
	header('Content-Type: text/html; charset=utf-8'); // utf-8인코딩

	// localhost = DB주소, web=DB계정아이디, 1234=DB계정비밀번호, post_board="DB이름"
	echo $host.$databaseName.$databaseUser.$databasePassword;
	//$db = new mysqli("`{$host}`,`{$databaseName}`,`{$databaseUser}`,`{$databasePassword}`");
	$db = new mysqli("localhost","uke","uke!9091!","userdb"); 
	$db->set_charset("utf8");

	function mq($sql)
	{
		global $db;
		return $db->query($sql);
	}
?>