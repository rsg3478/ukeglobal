<?php
include_once('../../common/head.php');
include_once('../../common/menu.php');
?>

<div class="dashboard">
<div class="board_tool"> 

 
<form action="/adm/views/video/" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
 
</div>
</div>

<?php

$uploadOk = 1;
$target_dir = $_SERVER['DOCUMENT_ROOT'].'/upload/video/';
//$filename = basename($_FILES["fileToUpload"]["name"]);
$headers = array();
	 
foreach($_SERVER as $k => $v) {
    if(substr($k, 0, 9) == "HTTP_FILE") {
        $k = substr(strtolower($k), 5);
        $headers[$k] = $v;
    } 
}

$filename = rawurldecode($headers['file_name']);
$filepath = urlencode($filename); // 한글화일명을 대비해 urlencode 로 감는다.
$target_file = $target_dir .$filepath;
echo $filepath;
$Filetype = pathinfo($target_file,PATHINFO_EXTENSION);

/* // Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
} */


// Check file size
/* if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "<script>alert('Sorry, your file is too large.');</script>";
    $uploadOk = 0;
} */

// Allow certain file formats
/* if($Filetype != "jpg" && $Filetype != "png" && $Filetype != "jpeg"
&& $Filetype != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
} */

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>


<?php
include_once('../../common/footer.php');
?>
