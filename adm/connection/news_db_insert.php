<?php
        include_once('../../data/db_pdo.php'); // 데이터 베이스 접속 불러오기

$title = $_POST['title'];
$content = $_POST['content'];
$link = $_POST['link'];

if ($_POST['check'] != 1)
$true_false = 0;

$query = news_insert($title,$content,$link);

$res = $connect->query($query) or die($connect->errorInfo());


if($res) {
    // DB에 입력 성공시
    echo "success";
} else {
    echo ("Error description: " . $connect -> error);; // DB에 입력 실패시 '실패' 표시
} 
?>