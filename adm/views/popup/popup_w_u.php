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
<form name="popup_nse" onsubmit="return submitContents();" method="post">

<th> 제목 : </th><td colspan="2"><input type="text" name="title" id="title"></td>
<tr>
<th>시작</th><td><input type="text" name="start_date" id="start_date"></td>
<th>종료</th><td><input type="text" name="finish_date" id="finish_date"></td>
</tr>
<tr>
<th>가로</th><td><input type="text" name="width" id="width"></td>
<th>세로</th><td><input type="text" name="height" id="height"></td>
</tr>
<tr>
<th>탑위치</th><td><input type="text" name="top_position" id="top_position"></td> 
<th>left위치</th><td><input type="text" name="left_position" id="left_position"></td>
</tr>
<tr>
<th>내용</th><td colspan="3"><textarea name="content" id="content" class="nse_content"></textarea></td>
</tr>
<tr>
<td><input type="submit" value="전송" onclick="submitContents(this); return false;" /></td>
</tr> 


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
<script type="text/javascript" src="<?echo UKE_DOMAIN?>/js/adm/popup_form_ajax.js" charset="utf-8"></script>   

</form>
</table>

</div>
</div>

<?php
include_once('../../common/footer.php');
?>
