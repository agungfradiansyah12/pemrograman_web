<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Anggota</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

</head>
<body>
    <?php
        include('koneksi.php');

        $id = $_GET['id'];
        $query = "SELECT * FROM anggota WHERE id = $id";
        $result = mysqli_query($koneksi, $query);
        $row = mysqli_fetch_assoc($result);
        mysqli_close($koneksi);
    ?>

    <div class="container mt-4">
        <h2>Edit Data Anggota</h2>

        <form action="proses.php?aksi=ubah" method="post">
            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <div class="form-group">
                <label for="name">Nama:</label>
                <input type="text" class="form-control" name="name" id="name" value="<?= $row['nama'] ?>" required>
            </div>

            <div class="form-group">
                <label for="jenis kelamin">Jenis Kelamin:</label>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jenis_kelamin" value="L" id="laki" <?php if ($row['jenis_kelamin'] === 'L' ) echo 'checked'; ?> required >
                    <label for="laki">Laki-laki</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jenis_kelamin" value="P" id="perempuan" <?php if ($row['jenis_kelamin'] === 'P' ) echo 'checked'; ?> required > <label for="laki">Perempuan</label>
                </div>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input type="text" class="form-control" name="alamat" id="alamat" value="<?= $row['alamat'] ?>">
            </div>
            
            <div class="form-group">
                <label for="no_telp">No. Telp:</label>
                <input type="text" class="form-control" name="no_telp" id="no_telp" value="<?= $row['no_telp'] ?>" required>
            </div>
            
            <button type="submit" class="btn btn-primary mt-2">Simpan Data</button> 
            <a href="indexBootstrap.php" class="btn btn-secondary mt-2">Kembali</a> 
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>