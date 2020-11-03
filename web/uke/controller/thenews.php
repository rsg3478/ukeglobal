<?php

    
//1. DB 연결

$pdo = new PDO('mysql:host=luie12.cafe24.com;dbname=luie12;charset=utf8', 'luie12', 'qazxsw1@');  

function main_news_list(){

    global $pdo;

try
{    
    $select_news_query = "select * from news_board order by no desc limit 2";

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