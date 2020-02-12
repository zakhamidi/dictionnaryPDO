<?php
$folder = "audio/";
$filename = $folder . basename($_FILES["file"]["name"]);
$audio=basename( $_FILES["file"]["name"]);
$uploadOk = 1;
$audioFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
// Check if the file exists
if (file_exists($filename)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["file"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($audioFileType != "mp3" && $audioFileType != "wav") {
    echo "Sorry, only mp3 and wav files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok to upload the file
} else {
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $filename)) {
        echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>