<?php
include_once('../../common/head.php');
include_once('../../common/menu.php');
?>


<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo UKE_ADMIN_URL?>/editor/js/HuskyEZCreator.js" charset="utf-8"></script>
<style>.nse_content{width:660px;height:500px}</style>

<div class="dashboard">
<div class="board_tool">

<table>
<form name="board_nse" onsubmit="return submitContents();" method="post">

<?
if($_GET['no'] == null) {?>

<th> 제목: </th><td ><input type="text" name="title" id="title"></td>
<tr>
<th> 카테고리: </th><td><input type="text" name="category" id="category" value="뉴스" readonly></td>
</tr>
<tr>
<th> 내용 : </th><td colspan="4"><textarea name="content" id="content" class="nse_content"></textarea></td>
</tr>
<tr>
<th> 링크 : </th><td ><input type="text" name="link" id="link" value=""></td>
<tr>
<tr>
<td><input type="submit" value="전송" onclick="submitContents(this); return false;" /></td>
</tr> 

<?}else {
            include_once('../../../data/db_pdo.php');
            $content_sql = news_content ($_GET['no']);
            $content_Array = $connect->prepare($content_sql) or die($connect->errorInfo());
            $content_Array -> execute();
            $content=$content_Array->fetch()
?>

<th> 제목: </th><td ><input type="text" name="title" id="title" value="<? echo $content['news_title']; ?>"></td>
<tr>
<th> 카테고리: </th><td><input type="text" name="category" id="category" value="뉴스"></td>
</tr>
<tr>
<th> 내용 : </th><td colspan="4"><textarea name="content" id="content" class="nse_content"><? echo $content['news_content']; ?></textarea></td>
</tr>
<tr>
<th> 링크 : </th><td ><input type="text" name="link" id="link" value="<? echo $content['news_link']; ?>"></td>
<tr>
<tr>
<td><input type="submit" value="전송" onclick="submitContents(this); return false;" /></td>
</tr> 

<?}?>

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
<script type="text/javascript" src="<?echo UKE_DOMAIN?>/js/adm/news_form_ajax.js" charset="utf-8"></script>
   
</form>
</table>

</div>
</div>

<?php
include_once('../../common/footer.php');
?>

