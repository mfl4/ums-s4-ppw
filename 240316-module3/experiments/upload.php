<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>File Upload</title>
</head>
<body>
<?php
error_reporting(E_ALL ^ E_NOTICE);

$directory = "images/";
$photo_name = $_FILES["photo"]['name'];
$photo_size = $_FILES["photo"]['size'];
$photo_type = $_FILES["photo"]['type'];
$upload = $directory . $photo_name;
$submit = $_POST["submit"];

if ($submit) {
    move_uploaded_file($_FILES["photo"]["tmp_name"], $upload);
    echo
    "<h3>File Upload Successfully</h3>
    </br></br>
    <img border='0' src='$upload'>
    </br></br>
    <b>File Informations :</b>
    </br>
    File Name : $photo_name </br>
    File Size : $photo_size byte </br>
    File Type : $photo_type </br>";
} else {
    ?>
    <form method='POST' enctype='multipart/form-data' action='upload.php'>
        File upload : <input type='file' name='photo' size='20'>
        </br>
        <input type='submit' name='submit' value='UPLOAD'>
    </form>
    <?php
}
?>
</body>
</html>