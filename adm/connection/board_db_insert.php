<?php
        include_once('../../data/db_pdo.php'); // 데이터 베이스 접속 불러오기

$table = "board";

$true_false = $_POST['check'];

if ($_POST['check'] != 1)
$true_false = 0;

$category = $_POST['category'];
$title = $_POST['title'];
$content = $_POST['content'];
$session_id = "상혁이";

/* $table = "board";
$true_false = 0;
$category = "notice";
$title = "공지사항";
$content = "test"; */

$query = notice_insert($table,$true_false,$category,$title,$content,$session_id);

$res = $connect->query($query) or die($connect->errorInfo());


if($res) {
    // DB에 입력 성공시
    echo "success";
} else {
    echo ("Error description: " . $connect -> error);; // DB에 입력 실패시 '실패' 표시
} 
?>