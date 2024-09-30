<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Associative</title>
    <link rel="stylesheet" href="styleArray2.css">
</head>
<body>
    <h2>Tabel Dosen</h2>
    <?php

    $Dosen =[
        'nama' => 'Elok Nur Hamdana',
        'domisi' => 'Malang',
        'jenis_kelamin' => 'Perempuan'
    ];

    // echo "Nama : {$Dosen['nama']} <br>";
    // echo "Domisi : {$Dosen['domisi']} <br>";
    // echo "Jenis Kelamin : {$Dosen['jenis_kelamin']} <br>";
    ?>

    <table>
        <tr>
            <th>Nama</th>
            <th>Domisi</th>
            <th>Jenis Kelamin</th>
        </tr>
        <tr>
            <td><?= $Dosen['nama'] ?></td>
            <td><?= $Dosen['domisi'] ?></td>
            <td><?= $Dosen['jenis_kelamin'] ?></td>
        </tr>
    </table>
    
</body>
</html>