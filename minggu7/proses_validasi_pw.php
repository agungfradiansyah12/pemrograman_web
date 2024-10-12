<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $errors = array();

    // Validasi nama
    if (empty($nama)) {
        $errors[] = "Nama tidak boleh kosong";
    }

    // Validasi email
    if (empty($email)) {
        $errors[] = "Email tidak boleh kosong";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) { // menggunakan negasi !
        $errors[] = "Email tidak valid";
    }

    // Jika ada kesalahan validasi
    if (!empty($errors)) { // menampilkan pesan kesalahan jika ada
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    } else {
        // Lanjutkan dengan pemrosesan data jika semua validasi berhasil
        echo "Data berhasil dikirim: Nama = " . $nama . ", Email = " . $email . ", Password = " . $password;
    }
}
