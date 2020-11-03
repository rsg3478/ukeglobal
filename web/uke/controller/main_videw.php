<?php

    
//1. DB 연결
include_once($_SERVER['DOCUMENT_ROOT'].'/web/uke/controller/common.php');

$pdo = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8', $user , $pw);  

function main_video_list(){

    global $pdo;

try
{    
    $select_news_query = "select * from video_board order by no desc limit 4";

    $result = $pdo -> query($select_news_query) or die($pdo->errorInfo());

    return $result;

}catch ( PDOException $e ){

	echo 'Connect failed : ' . $e->getMessage() . '';
    return false;
    
}

}

?>