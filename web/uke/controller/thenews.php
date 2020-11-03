<?php

    
//1. DB 연결
include_once($_SERVER['DOCUMENT_ROOT'].'/web/uke/controller/common.php');

$pdo = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8', $user , $pw);  

function main_news_list(){

    global $pdo;

try
{    
    $select_news_query = "SELECT * FROM news_board WHERE NO IN (SELECT MAX(NO) FROM news_board WHERE language_type = 'ko' GROUP BY news_type)";

    $result = $pdo -> query($select_news_query) or die($pdo->errorInfo());

    return $result;

}catch ( PDOException $e ){

	echo 'Connect failed : ' . $e->getMessage() . '';
    return false;
    
}

}


function main_notice_list(){

    global $pdo;

try
{    
    $select_notice_query = "select * from notice_board order by no desc limit 2";

    $result = $pdo -> query($select_notice_query) or die($pdo->errorInfo());

    return $result;

}catch ( PDOException $e ){

	echo 'Connect failed : ' . $e->getMessage() . '';
    return false;
    
}

}

?>