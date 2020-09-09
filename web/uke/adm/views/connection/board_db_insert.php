<?php
include "../../data/db_conn.php"; // 데이터 베이스 접속 불러오기

//include "../../data/db_query.php"; //query 문 불러오기

$connect = new mysqli($host, $databaseUser, $databasePassword, $databaseName);
$connect->set_charset('utf8');
 
function query($sql){  
global $connect;
return $res = $connect->query($sql);
}

//테이블 명
$table = 'board';

$true_false = $_POST['check'];
if ($_POST['check'] != 1)
$true_false = 0;

$category = $connect->escape_string($_POST['category']);
$title = $connect->escape_string($_POST['title']);
$content = $connect->escape_string($_POST['content']);

$insert = "insert into `{$table}` (
  true_false,
  category,
  title,
  content,
  id
) values (
  $true_false,
 '{$category}',
 '{$title}',
 '{$content}',
 'id'  
)";

$res = query($insert);  


 if($res) {
    // DB에 입력 성공시
    echo "success <a href='./show.php' target='_blank'>show</a> click.";
} else {
    echo ("Error description: " . $connect -> error);; // DB에 입력 실패시 '실패' 표시
}
?>