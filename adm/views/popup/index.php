<?php
include_once('../../common/head.php');
include_once('../../common/menu.php');
?>

<div class="dashboard">
<div class="board_tool"> 

<?php
include_once('../../../data/db_pdo.php'); // 데이터 베이스 접속 불러오기

  // 페이징에 필요한 변수 11개
  // $_GET['page'], $list_size, $page_size, $first
  // $total_list, $total_page, $row
  // $start_page, $end_page, $back, $next

  if(!isset($_GET['page']))
  {
    $_GET['page']=1;
  }

  $list_size = 5;
  $page_size = 5;

  $first = ($_GET['page']*$list_size)-$list_size;

  // 1. 리스트에 출력하기 위한 sql문
  $table = "board";
  //$data = list_count($table);
  $list_sql = popup_list($first, $list_size);
  $list_stt = $connect->prepare($list_sql) or die($connect->errorInfo());
  $list_stt -> execute();
?>

<center>
  <h1>팝업</h1>
  <h4>팝업 게시판입니다.</h4>
  <div id="write_btn">
      <a href="./popup_w_u.php"><button>글쓰기</button></a>
  </div>
    <table>
      <thead>
          <tr>
              <th width="70">번호</th>
                <th width="500">제목</th>
                <th width="120">글쓴이</th>
                <th width="100">작성일</th>
                <th width="100">조회수</th>
            </tr>
        </thead>

        <?php
  while($popup=$list_stt->fetch())  {
              //title변수에 DB에서 가져온 title을 선택
              $title=$popup["title"]; 
              if(strlen($title)>30){ 
                //title이 30을 넘어서면 ...표시
                $title=str_replace($popup["title"],mb_substr($popup["title"],0,30,"utf-8")."...",$popup["title"]);
              } 
 ?>
 
 <tbody>
      <tr>
        <td width="70"><?php echo $popup['no']; ?></td>
        <td width="500"><a href=""><?php echo $title;?></a></td>
        <td width="120"><?php echo $popup['category']?></td>
        <td width="100"><?php echo $popup['start_date']?></td>
        <td width="100"><?php echo $popup['finish_date'];?></td>
        <td width="100"><?php echo $popup['date'];?></td>
      </tr>
    </tbody>

<?php } ?>

</table>

<?php

  // 2. 총 페이지를 구하기 위한 sql문
  $total_sql = list_count($table);
  $total_stt=$connect->prepare($total_sql);
  $total_stt->execute();
  $total_row=$total_stt->fetch();

  $total_list = $total_row['count(*)'];
  $total_page = ceil($total_list/$list_size);
  $row = ceil($_GET['page']/$page_size);

  $start_page=(($row-1)*$page_size)+1;

  if($start_page<=0)
  {
    $start_page = 1;
  }

  $end_page=($start_page+$page_size)-1;

  if($total_page<$end_page)
  {
    $end_page=$total_page;
  }

  if($_GET['page']!=1) // 페이징 버튼은 $_GET['page'] 기준으로!
  {
    $back=$_GET['page']-$page_size;

    if($back<=0) // echo로 버튼을 찍기 전에 꼭 제한사항을 둘 것!
    {
      $back=1;
    }

    echo "<a href='$_SERVER[PHP_SELF]?page=$back'>◀</a>";

  }

  for($i=$start_page; $i<=$end_page; $i++)
  {
    if($_GET['page']!=$i) // !==가 아니라 !=이다!
    {
      echo "<a href='$_SERVER[PHP_SELF]?page=$i'>";
    }

    echo " [$i] ";

    if($_GET['page']!=$i)
    {
      echo "</a>";
    }
  }

  if($_GET['page']!=$total_page)
  {
    $next=$_GET['page']+$page_size;

    if($total_page<$next)
    {
      $next=$total_page;
    }

    echo "<a href='$_SERVER[PHP_SELF]?page=$next'>▶</a>";
  }

?>

</div>
</div>
</center>

<?php
include_once('../../common/footer.php');
?>