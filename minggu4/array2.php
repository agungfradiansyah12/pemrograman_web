<?php
$nilaiSiswa = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90]
];

$totalNilai = 0;
$jumlahSiswa = count($nilaiSiswa);

foreach ($nilaiSiswa as $siswa){
    $totalNilai += $siswa[1];
}

$rataRataNilai = $totalNilai / $jumlahSiswa;
echo "Rata-rata nilai siswa adalah $rataRataNilai <br>";
echo "Daftar siswa yang mendapatkan nilai diatas rata rata adalah : <br>";

foreach ($nilaiSiswa as $siswa){
    if($siswa[1] > $rataRataNilai){
        echo "Nama : {$siswa[0]} - Nilai : {$siswa[1]} <br>";
    }
}
?>
