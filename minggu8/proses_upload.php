<?php
    $targetdir = "documents/";

    if(!file_exists($targetdir)) {
        mkdir($targetdir, 0777, true);
    }

    if($_FILES['file']['name'][0]){
        $totalFiles = count($_FILES['file']['name']);

        for($i = 0; $i < $totalFiles; $i++) {
            $fileName = $_FILES['file']['name'][$i];
            $targetFilePath = $targetdir . $fileName;

            if(move_uploaded_file($_FILES['file']['tmp_name'][$i], $targetFilePath)) {
                echo "File $fileName berhasil diunggah <br>";
            } else {
                echo "File $fileName gagal diunggah";
            }
        }
    } else {
        echo "Tidak ada file yang diunggah";
    }
?>