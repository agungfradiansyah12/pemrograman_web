<?php
$nilaiSiswa = [85,92, 78, 64, 90, 75,88, 79, 70, 96];
sort($nilaiSiswa);
// echo $nilaiSiswa;
foreach ($nilaiSiswa as $nilai){
    echo "Nilai : $nilai <br>";
}

$totalNilai = 0;
foreach ($nilaiSiswa as $nilai){
    $totalNilai += $nilai;
}
echo "Total Nilai : $totalNilai <br>";
echo "Rata-rata Nilai : " . $totalNilai / count($nilaiSiswa)

?>