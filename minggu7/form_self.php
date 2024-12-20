<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input PHP</title>
</head>
<body>
    <h2>Form Input PHP</h2>
    <?php
        $namaErr ="";
        $nama = "";

        //cek apakah sudah submit
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["nama"])) {
                $namaErr = "Nama tidak boleh kosong, harus diisi";
            } else {
                $nama = $_POST["nama"];
                echo "Data berhasil disimpan";
            }
        }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" value="<?php echo $nama; ?>">
        <span class="error"><?php echo $namaErr; ?></span>

        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>