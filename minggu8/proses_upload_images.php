<?php
$targetdir = "uploads/";

if(!file_exists($targetdir)) {
    mkdir($targetdir, 0777, true);
}

if($_FILES['images']['name'][0]){
    $totalFiles = count($_FILES['images']['name']);

    for($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['images']['name'][$i];
        $targetFilePath = $targetdir . basename($fileName);
        $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        // Memeriksa ekstensi file
        $allowedExtensions = array("jpg", "jpeg", "png", "gif");
        if(in_array($fileType, $allowedExtensions)) {
            if(move_uploaded_file($_FILES['images']['tmp_name'][$i], $targetFilePath)) {
                echo "File $fileName berhasil diunggah <br>";
            } else {
                echo "File $fileName gagal diunggah <br>";
            }
        } else {
            echo "Ekstensi file $fileName tidak diizinkan <br>";
        }
    }
} else {
    echo "Tidak ada file yang diunggah";
}
?>
