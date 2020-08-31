<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<title>nse</title>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../nse/js/HuskyEZCreator.js" charset="utf-8"></script>
<style>
.nse_content{width:660px;height:500px}
</style>
</head>
<body>
<form name="nse" action="add_db_nse.php" method="post"><!-- 
    <form name="popup_nse" onsubmit="return submitContents();" method="post"> -->
<?
if( $url == null){
?>
        <input type="text" name="title" id="title">      
        <input type="text" name="start_date" id="start_date">
        <input type="text" name="fifnish_date" id="finish_date">
        <input type="text" name="width" id="width">
        <input type="text" name="height" id="height">
        <input type="text" name="top_position" id="top_position">
        <input type="text" name="left_position" id="left_position">
        <textarea name="content" id="content" class="nse_content"></textarea>
        <input type="submit" value="전송" onclick="submitContents(this); return false;" />
<?}else{
    include("");
    ?>
        <input type="text" name="title" id="title">      
        <input type="text" name="start_date" id="start_date">
        <input type="text" name="fifnish_date" id="finish_date">
        <input type="text" name="width" id="width">
        <input type="text" name="height" id="height">
        <input type="text" name="top_positionp" id="top_position">
        <input type="text" name="left_position" id="left_position">
        <textarea name="content" id="content" class="nse_content"></textarea>
        <input type="submit" value="전송" onclick="submitContents(this); return false;" />
<?}?>
<!-- <script type="text/javascript" src="../../js/popup_form_ajax.js" charset="utf-8"></script> -->
        <script type="text/javascript">
        var oEditors = [];
        nhn.husky.EZCreator.createInIFrame({
            oAppRef: oEditors,
            elPlaceHolder: "content",
            sSkinURI: "./SmartEditor2Skin.html",
            fCreator: "createSEditor2"
        });
        function submitContents(elClickedObj) {
            // 에디터의 내용이 textarea에 적용됩니다.
            oEditors.getById["content"].exec("UPDATE_CONTENTS_FIELD", []);
            // 에디터의 내용에 대한 값 검증은 이곳에서 document.getElementById("content").value를 이용해서 처리하면 됩니다.

            try {
                elClickedObj.form.submit();
            } catch(e) {}
            }
        </script>
    </form>
</body>
</html>
