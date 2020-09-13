<?php
        include_once('../../data/db_pdo.php'); // 데이터 베이스 접속 불러오기

$table = 'popup';
$title = $_POST['title'];
$content = $_POST['content'];
$session_id = 'id';
$start_date = $_POST['start_date'];
$finish_date = $_POST['finish_date'];
$width = $_POST['width'];
$height = $_POST['height'];
$top_position = $_POST['top_position'];
$left_position = $_POST['left_position'];

  
/*   $table = "popup";
  $title = "popuptest";
  $content = "test";
  $session_id = "id";
  $start_date = date("y-m-d");
  $finish_date = date("y-m-d");
  $width = "20";
  $height = "20";
  $top_position = "20";
  $left_position = "20"; */

  $query = popup_insert($table,$title,$content,$session_id,$start_date,$finish_date,$width,$height,$top_position,$left_position);

  $res = $connect->query($query) or die($connect->errorInfo());
  
 if($res) {
    // DB에 입력 성공시
    echo "success";
} else {
    echo ("Error description: " . $connect -> error);; // DB에 입력 실패시 '실패' 표시
} 
?>