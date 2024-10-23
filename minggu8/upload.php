<?php
if(isset($_POST['submit'])) {
    $targetdir = "uploads/";
    $targetfile = $targetdir . basename($_FILES["myfile"]["name"]);
    $fileType = strtolower(pathinfo($targetfile, PATHINFO_EXTENSION));

    $allowedExtensions = array("jpg", "jpeg", "png", "gif");
    // $maxSize = 5*1024*1024;

    // $allowedExtensions = array("txt", "pdf", "doc", "docx");
    $maxSize = 3*1024*1024;


    if(in_array($fileType, $allowedExtensions)&& $_FILES["myfile"]["size"] <= $maxSize) 
    {
        if(move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetfile)) {
            echo "File berhasil diunggah";
            // echo "<br><br>";
            // echo "<img src='$targetfile' width='200'>";
        } else {
            echo "File gagal diunggah";
        }
    } else {
        echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan";
    }
}