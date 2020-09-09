<?php 
include "./head.php";
?>
<div class="mainbar">
    <?php
    include "./sidebar.php";
    $parameter = $_GET["title"];
?>
<script type="text/javascript" src="../js/board_list_checkbox.js" charset="utf-8"></script>
<div class="dashboard">
<div class="board_tool"> 
  <h1>자유게시판</h1>
  <h4>자유롭게 글을 쓸 수 있는 게시판입니다.</h4>
  <div id="write_btn">
      <a href="./board_w_u.php?title=<?echo $parameter?>"><button>글쓰기</button></a>
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
            if($parameter == "notice")
            $parameter = "공지사항";
            else
            $parameter = "뉴스";

          include "../data/db_query.php";

        // board테이블에서 no를 기준으로 내림차순해서 5개까지 표시
        $select = "select * from board where category='$parameter' order by no desc limit 0,10";

          $sql = query($select);
          
            while($board = $sql->fetch_array()){
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

      <?php } ?>

    </table>

  </div>
  </div>
</div>
<?php
include "./footer.php"
?>