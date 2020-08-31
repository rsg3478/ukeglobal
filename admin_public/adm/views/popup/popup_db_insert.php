<?php
include "../../data/db_conn.php"; // 데이터 베이스 접속 프로그램 불러오기

$connect = new mysqli($host, $databaseUser, $databasePassword, $databaseName);
$connect->set_charset('utf8');

//테이블 명
$table = 'popup';
$title = $connect->escape_string($_POST['title']);
$content = $connect->escape_string($_POST['content']);
$start_date = $connect->escape_string($_POST['start_date']);
$finish_date = $connect->escape_string($_POST['finish_date']);
$width = $connect->escape_string($_POST['width']);
$height = $connect->escape_string($_POST['height']);
$top_position = $connect->escape_string($_POST['top_position']);
$left_position = $connect->escape_string($_POST['left_position']);

$sql = "insert into `{$table}` (
    title,
    content,
    id,
    start_date,
    finish_date,
    width,
    height,
    top_position,
    left_position
  ) values (
   '{$title}',
   '{$content}',
   id,
   '{$start_date}'
   '{$finish_date}',
   '{$width}',
   '{$height}',
   '{$top_position}',
   '{$left_position}
  )";
  
$res = $connect->query($sql);

/* if($res) {
    // DB에 입력 성공시
    echo "success <a href='./show.php' target='_blank'>show</a> click.";
} else {
    echo ("Error description: " . $connect -> error);; // DB에 입력 실패시 '실패' 표시
} */

mysql_close($connect);

?>