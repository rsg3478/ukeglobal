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
<script>
//check box 값 변경
$(document).ready(function(){
    $("#check").change(function(){
        if($("#check").is(":checked")){
            $("#check").val(1);
            //console.log("1");
        }else{
            $("#check").val(0);
            //console.log("0");
        }
    });
});
</script>
    <form name="board_nse" onsubmit="return submitContents();" method="post">
<?
if( $url == null){
?>
        <input type="text" name="category" id="category">
        <input type="text" name="title" id="title">
        <input type="checkbox" name="check" id="check">
        <textarea name="content" id="content" class="nse_content"></textarea>
        <input type="submit" value="전송" onclick="submitContents(this); return false;" />
<?}else{
    include("");
    ?>
        <input type="text" name="category" id="category" value="<? $category ?>">
        <input type="text" name="title" id="title" value="<? $title ?>">
        <input type="checkbox" name="check" id="check" value="<? $true_false ?>">
        <textarea name="content" id="content" class="nse_content" value="<? $content ?>"></textarea>
        <input type="submit" value="전송" onclick="submitContents(this); return false;" />
<?}?>
<script type="text/javascript" src="../../js/board_form_ajax.js" charset="utf-8"></script>
    </form>
</body>
</html>
