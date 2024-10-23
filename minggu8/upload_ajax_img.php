<?php
if (isset($_FILES['files'])) {
    $errors = array();
    
    foreach ($_FILES['files']['name'] as $key => $file_name) {
        $file_size = $_FILES['files']['size'][$key];
        $file_tmp = $_FILES['files']['tmp_name'][$key];
        $file_type = $_FILES['files']['type'][$key];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION)); // Mendapatkan ekstensi file

        $extensions = array("jpg", "jpeg", "png", "gif"); // Ekstensi yang diizinkan

        if (in_array($file_ext, $extensions) === false) {
            $errors[] = "Ekstensi file '$file_name' tidak diizinkan. Hanya JPG, JPEG, PNG, dan GIF yang boleh diunggah.";
        }

        if ($file_size > 2097152) {
            $errors[] = "Ukuran file '$file_name' tidak boleh lebih dari 2 MB";
        }

        if (empty($errors)) {
            move_uploaded_file($file_tmp, "documents/" . $file_name);
            echo "File '$file_name' berhasil diunggah.<br>";
        }
    }

    if (!empty($errors)) {
        echo implode("<br>", $errors); // Menampilkan semua error
    }
}
?>
