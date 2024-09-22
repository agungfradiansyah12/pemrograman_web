<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

// 1. Inisialisasi variabel untuk menyimpan nilai tertinggi dan terendah
$nilaiTertinggi = $nilaiSiswa[0];
$nilaiTerendah = $nilaiSiswa[0];

// 2. Cari nilai tertinggi
foreach ($nilaiSiswa as $nilai) {
    if ($nilai > $nilaiTertinggi) {
        $nilaiTertinggi = $nilai;
    }
}

// 3. Cari nilai terendah
foreach ($nilaiSiswa as $nilai) {
    if ($nilai < $nilaiTerendah) {
        $nilaiTerendah = $nilai;
    }
}

// 4. Hitung total nilai dari sisa nilai dengan mengabaikan satu nilai tertinggi dan satu nilai terendah
$totalNilai = 0;
$jumlahSiswaTersisa = 0;
$sisaNilai = [];

foreach ($nilaiSiswa as $nilai) {
    // Abaikan satu nilai tertinggi dan satu nilai terendah
    if ($nilai != $nilaiTertinggi && $nilai != $nilaiTerendah) {
        $totalNilai += $nilai;
        $jumlahSiswaTersisa++;
        $sisaNilai[] = $nilai;
    }
}

// 5. Hitung rata-rata dari sisa nilai
$rataRataNilai = $totalNilai / $jumlahSiswaTersisa;

// Tampilkan hasil
echo "Nilai tertinggi adalah: $nilaiTertinggi <br>";
echo "Nilai terendah adalah: $nilaiTerendah <br>";
echo "Jumlah sisa nilai adalah: $jumlahSiswaTersisa <br>";
echo "8 nilai yang tersisa adalah: ";
foreach ($sisaNilai as $nilai) {
    echo "$nilai,";
}
echo "<br>";
echo "Total nilai setelah mengabaikan nilai tertinggi dan terendah adalah: $totalNilai <br>";
echo "Rata-rata nilai dari sisa nilai adalah: $rataRataNilai <br>";
?>
