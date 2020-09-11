<?php
include_once('../common/head.php');
include_once('../common/header.php');
include_once('../common/menu.php');

$parameter = $_GET["title"];
if($parameter == "notice")
$parameter = "공지사항";
else
$parameter = "뉴스";
?>

<script type="text/javascript" src="<?php echo UKE_ADMIN_URL?>/js/board_list_checkbox.js" charset="utf-8"></script>

<div class="dashboard">
<div class="board_tool"> 

  <h1>자유게시판</h1>
  <h4>자유롭게 글을 쓸 수 있는 게시판입니다.</h4>
  <div id="write_btn">
      <a href="<?php echo UKE_ADMIN_URL?>/views/board_w_u.php?title=<?echo $parameter?>"><button>글쓰기</button></a>
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
        include_once('../data/db_query.php');

    $select = "select * from board where category='$parameter' order by no desc limit 0,10";

        $sql = query($select);
        echo "<script>console.log($sql);</script>";
        
        while($board = $sql->fetch()){
            //title변수에 DB에서 가져온 title을 선택
            $title=$board["title"]; 
            if(strlen($title)>30){ 
              //title이 30을 넘어서면 ...표시
              $title=str_replace($board["title"],mb_substr($board["title"],0,30,"utf-8")."...",$board["title"]);
            } 
?>
    <tbody>
      <tr>
        <td width="70"><?php echo $board['no']; ?></td>
        <td width="500"><a href=""><?php echo $title;?></a></td>
        <td width="120"><?php echo $board['category']?></td>
        <td width="100"><?php echo $board['id']?></td>
        <td width="100"><?php echo $board['date']; ?></td>
        <? if($board['true_false'])?>
        <td width="100">
          <? if($board['true_false'] == 1){?>
          <input type="checkbox" value="<?php echo $board['no'];?>" checked>
          <?} else{?>
          <input type="checkbox" value="<?php echo $board['no'];?>">
          <?}?>
       </td>
      </tr>
    </tbody>

<? }?>

    </table>

  </div>
  </div>

<?php
include_once('../common/footer.php');
?>
