<?php
    $hargaAwal = 120000;
    $diskonPersentase = 20;

    $diskon = $diskonPersentase / 100 * $hargaAwal;

    if($hargaAwal > 100000){
        $hargaAnkhir = $hargaAwal - $diskon;
    } else{
        $hargaAnkhir = $hargaAwal;
    }

    echo "Harga awal : Rp.$hargaAwal <br>";
    echo "Persentase diskon : $diskonPersentase% <br>";
    echo "Jumlah Diskon Nominal : Rp.$diskon <br>";
    echo "Harga akhir yang harus dibayar : Rp.$hargaAnkhir";
?>