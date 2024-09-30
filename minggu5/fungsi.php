<?php
    function perkenalan($nama, $salam="Assalamualaikum"){
        echo "$salam" .", ";
        echo "Perkenalkan, nama saya $nama <br>";
        echo "Senang berkenalan dengan anda <br>";
    }

    //memanggil fungsi yang sudah dibuat
    perkenalan("Agung", "Selamat Pagi");

    echo "<hr>";
    $saya = "Elok";
    $ucapanSalam= "Selamat Pagi";

    //memanggil lagi
    perkenalan($saya, $ucapanSalam);
    echo "<hr>";
    perkenalan($saya);

    echo "<hr>";

    function hitungUmur($thn_lahir, $thn_sekarang){
        $umur = $thn_sekarang - $thn_lahir;
        return $umur;
    }

    echo "Umur saya adalah " . hitungUmur(2005, 2024) . " tahun";

    echo "<hr>";

    //pertanyaan No 8
    function perkenalan2($nama, $salam="Assalamualaikum"){
        echo "$salam" .", ";
        echo "Perkenalkan, nama saya $nama <br>";
        //memanggil fungsi lain
        echo "Saya berusia " . hitungUmur(2005, 2024) . " tahun" . "<br>";
        echo "Senang berkenalan dengan anda <br>";
    }
    perkenalan2("Agung Fradiansyah");
?>