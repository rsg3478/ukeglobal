<?php
include_once('common/head.php');
include_once('common/header.php');
include_once('common/menu.php');

$parameter = $_GET["title"];
if($parameter == "notice")
$parameter = "공지사항";
else
$parameter = "뉴스";
?>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="./nse/js/HuskyEZCreator.js" charset="utf-8"></script>
<script type="text/javascript" src="../js/board_w_u_checkbox.js" charset="utf-8"></script>
<style>.nse_content{width:660px;height:500px}</style>

<div class="dashboard">
<div class="board_tool">

<table>
<form name="board_nse" onsubmit="return submitContents();" method="post">

<?if( $url == null){?>

<th> 제목: </th><td ><input type="text" name="category" id="category"></td>
<tr>
<th> 카테고리: </th><td><input type="text" name="category" id="category" value="<?php echo $parameter;?>"></td>
<th> check시 게시물등록 </th><td><input type="checkbox" name="check" id="check"></td>
</tr>
<tr>
<th> 내용 : </th><td colspan="4"><textarea name="content" id="content" class="nse_content"></textarea></td>
</tr>
<tr>
<td><input type="submit" value="전송" onclick="submitContents(this); return false;" /></td>
</tr> 

<?}else{include("");?>

<th> 제목: </th><td ><input type="text" name="category" id="category"></td>
<tr>
<th> 카테고리: </th><td><input type="text" name="category" id="category"></td>
<th> check시 게시물등록 </th><td><input type="checkbox" name="check" id="check"></td>
</tr>
<tr>
<th> 내용 : </th><td colspan="4"><textarea name="content" id="content" class="nse_content"></textarea></td>
</tr>
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
    sSkinURI: "./nse/SmartEditor2Skin.html",
    fCreator: "createSEditor2"
});
</script>
<script type="text/javascript" src="../js/board_form_ajax.js" charset="utf-8"></script>
   
</form>
</table>

</div>
</div>
<?php
include_once('common/footer.php');
?>