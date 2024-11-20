<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Anggota</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Data Anggota</h2>
        <a href="create.php" class="btn-tambah">TAMBAH DATA</a>
        <?php
        include 'koneksi.php';
    
        $query = "SELECT * FROM anggota ORDER BY id DESC";
        $result = sqlsrv_query($conn, $query);
    
        if ($result === false) {
            die(print_r(sqlsrv_errors(), true));
        }
    
        $rows = [];
        while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
            $rows[] = $row;
        }
    
        if (count($rows) > 0) {
            $no = 1;
            echo "<table>";
            echo "
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>No Telp</th>
                <th>Aksi</th>
            </tr>";
            foreach ($rows as $row) {
                $kelamin = $row['jenis_kelamin'] === 'L' ? 'Laki-laki' : 'Perempuan';
                echo "
                <tr>
                    <td>". $no++ ."</td>
                    <td>" . htmlspecialchars($row["nama"]) . "</td>
                    <td>" . $kelamin . "</td>
                    <td>" . htmlspecialchars($row["alamat"]) . "</td>
                    <td>" . htmlspecialchars($row["no_telp"]) . "</td>
                    <td>
                        <a href='edit.php?id=" . $row["id"] ."'>Edit</a> | 
                        <a href='#' onclick='konfirmasiHapus(" . $row["id"] . ", \"" . htmlspecialchars($row["nama"]) . "\")'>Hapus</a>
                    </td>
                </tr>";
            }
            echo "</table>";
        } else {
            echo "Tidak ada data";
        }
    
        sqlsrv_free_stmt($result);
        sqlsrv_close($conn); 
    
        ?>
    </div>
    <script>
        function konfirmasiHapus(id, nama) {
            var konfirmasi = confirm("Apakah Anda yakin ingin menghapus data anggota " + nama + "?");
            if (konfirmasi) {
                window.location.href = "proses.php?aksi=hapus&id=" + id;
            }
        }
    </script>
</body>
</html>
