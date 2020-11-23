<?php
include_once('../../common/head.php');
include_once('../../common/menu.php');
?>


<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo UKE_ADMIN_URL?>/editor/js/HuskyEZCreator.js" charset="utf-8"></script>
<script type="text/javascript" src="<?php echo UKE_DOMAIN?>/js/adm/board_w_u_checkbox.js" charset="utf-8"></script>
<style>.nse_content{width:660px;height:500px}</style>

<div class="dashboard">
<div class="board_tool">

<table>
<form name="board_nse" onsubmit="return submitContents();" method="post">

<? 
if($_GET['no'] == null) { ?>


<th> 제목: </th><td ><input type="text" name="title" id="title"></td>
<tr>
<th> 카테고리: </th><td><input type="text" name="category" id="category" value="공지사항" readonly></td>
<th> check시 게시물등록 </th><td><input type="checkbox" name="check" id="check" value="0"></td>
</tr>
<tr>
<th> 내용 : </th><td colspan="4"><textarea name="content" id="content" class="nse_content"></textarea></td>
</tr>
<tr>
<td><input type="submit" value="전송" onclick="submitContents(this); return false;" /></td>
</tr> 

<?php } else {

        include_once('../../../data/db_pdo.php');
        $table = 'board';
        $content_sql = notice_content ($table, $_GET['no']);
        $content_Array = $connect->prepare($content_sql) or die($connect->errorInfo());
        $content_Array -> execute();
        $content=$content_Array->fetch()

?>

<th> 제목: </th><td ><input type="text" name="title" id="title" value="<? echo $content['title']; ?>"></td>
<tr>
<th> 카테고리: </th><td><input type="text" name="category" id="category" value="<? echo $content['category']; ?>" readonly></td>
<?php if ($content['true_false'] == 1) { ?>
<th> check시 게시물등록 </th><td><input type="checkbox" name="check" id="check" value="<?php echo $content['true_false']; ?>" checked></td>
<?php } else{ ?>
<th> check시 게시물등록 </th><td><input type="checkbox" name="check" id="check" value="<?php echo $content['true_false']; ?>"></td> 
<?php } ?>
</tr>
<tr>
<th> 내용 : </th><td colspan="4"><textarea name="content" id="content" class="nse_content"><? echo $content['content']; ?></textarea></td>
</tr>
<tr>
<td><input type="submit" value="전송" onclick="submitContents(this); return false;" /></td>
</tr> 

<?php } ?>

<script>
    //editor
let oEditors = [];
nhn.husky.EZCreator.createInIFrame({
    oAppRef: oEditors,
    elPlaceHolder: "content",
    sSkinURI: "<?echo UKE_ADMIN_URL?>/editor/SmartEditor2Skin.html",
    fCreator: "createSEditor2"
});
</script>
<script type="text/javascript" src="<?echo UKE_DOMAIN?>/js/adm/board_form_ajax.js" charset="utf-8"></script>
   
</form>
</table>

</div>
</div>

<?php
include_once('../../common/footer.php');
?>

