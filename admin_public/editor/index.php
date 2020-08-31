<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<title>nse</title>
<script type="text/javascript" src="./js/HuskyEZCreator.js" charset="utf-8"></script>
<style>
.nse_content{width:660px;height:500px}
</style>
</head>
<body>
    <form name="nse" action="add_db_nse.php" method="post">
        <textarea name="ir1" id="ir1" class="nse_content"></textarea>
        <script type="text/javascript">
        var oEditors = [];
        nhn.husky.EZCreator.createInIFrame({
            oAppRef: oEditors,
            elPlaceHolder: "ir1",
            sSkinURI: "./SmartEditor2Skin.html",
            fCreator: "createSEditor2"
        });
        function submitContents(elClickedObj) {
            // 에디터의 내용이 textarea에 적용됩니다.
            oEditors.getById["ir1"].exec("UPDATE_CONTENTS_FIELD", []);
            // 에디터의 내용에 대한 값 검증은 이곳에서 document.getElementById("ir1").value를 이용해서 처리하면 됩니다.

            try {
                elClickedObj.form.submit();
            } catch(e) {}
            }
        </script>
        <input type="submit" value="전송" onclick="submitContents(this)" />
    </form>
</body>
</html>

<?php
$mysqli = new mysqli("mysql","root","123123","uke_admin");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
echo "연결 성공";

$mysqli -> close();
?>