<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Anggota</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Data Anggota</h2>
        <form action="proses.php?aksi=tambah" method="post">
            <label for="name">Nama:</label>
            <input type="text" name="name" id="name" required>
            <label for="jenis kelamin">Jenis Kelamin:</label>
            <div class="radio-group">
                <input type="radio" name="jenis_kelamin" value="L" id="laki" required>Laki-laki
                <input type="radio" name="jenis_kelamin" value="P" id="perempuan" required>Perempuan
            </div>
            <label for="alamat">Alamat:</label>
            <input type="text" name="alamat" id="alamat"></label>
            <label for="no_telp">No. Telp:</label>
            <input type="text" name="no_telp" id="no_telp" required>
            <button type="submit">Simpan Data</button>
            <a href="index.php" class="btn-kembali">Kembali</a>
        </form>
    </div>
</body>
</html>