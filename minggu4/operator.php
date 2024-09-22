<?php
$a = 10;
$b = 10;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil penjumlahan dari $a +  $b = $hasilTambah <br>";
echo "Hasil pengurangan dari $a - $b = $hasilKurang <br>";
echo "Hasil perkalian dari $a * $b = $hasilKali <br>";
echo "Hasil pembagian dari $a / $b = $hasilBagi <br>";
echo "Hasil sisa bagi dari $a % $b = $sisaBagi <br>";
echo "Hasil pangkat dari $a ** $b = $pangkat <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "<br>";
echo "Hasil sama dengan, apakah $a sama dengan $b ? = $hasilSama <br>";
echo "Hasil tidak sama dengan, apakah $a tidak sama dengan $b = $hasilTidakSama <br>";
echo "Hasil Lebih Kecil, apakah $a lebih kecil dari $b = $hasilLebihKecil <br>";
echo "Hasil Lebih Besar, apakah $a lebih besar dari $b = $hasilLebihBesar <br>";
echo "Hasil lebih kecil sama dengan, apakah $a lebih kecil atau sama dengan $b = $hasilLebihKecilSama <br>";
echo "Hasil lebih besar sama dengan, apakah $a lebih besar atau sama dengan $b = $hasilLebihBesarSama <br>";

echo "<br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;


echo "Hasil AND, apakah $a && $b = $hasilAnd <br>";
echo "Hasil OR, apakah $a || $b = $hasilOr <br>";
echo "Hasil NOT, apakah !$a = $hasilNotA <br>";
echo "Hasil NOT B, apakah !$b = $hasilNotB <br>";


echo "<br>";
Operasi Assignment
echo "Nilai awal \$a = $a dan \$b = $b<br><br>";
$a += $b;
echo "Hasil dari \$a += \$b adalah $a <br>";
echo "Nilai \$a sekarang $a <br>";
$a -= $b;
echo "Hasil dari \$a -= \$b adalah $a <br>";
echo "Nilai \$a sekrang $a <br>";
$a *= $b;
echo "Hasil dari \$a *= \$b adalah $a <br>";
echo "Nilai \$a sekrang $a <br>";
$a /= $b;
echo "Hasil dari \$a /= \$b adalah $a <br>";
echo "Nilai \$a sekrang $a <br>";
$a %= $b;
echo "Hasil dari \$a %= \$b adalah $a <br>";
echo "Nilai \$a sekrang $a <br>";



$hasilIdentik = $a === $b;
$tidakIdentik = $a !== $b;

echo "Hasil identik (apakah \$a === \$b?): $hasilIdentik<br>";
echo "Hasil tidak identik (apakah \$a !== \$b?): $tidakIdentik<br>";

$totalKursi = 45;
$kursiTerisi = 28;
echo "Total kursi = $totalKursi <br>";
echo "Kursi terisi = $kursiTerisi <br>";
$sisaKursi = $totalKursi - $kursiTerisi;
echo "Sisa kursi = $sisaKursi <br>";
$persentaseKursiKosong = ($sisaKursi / $totalKursi) * 100;
echo "Jadi persentase kursi yang kosong = $persentaseKursiKosong % <br>";


?>