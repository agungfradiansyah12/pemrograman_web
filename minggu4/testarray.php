<?php
$buah = ["Apel", "Jeruk", "Pisang", "Mangga"];
echo "$buah[0]<br>";
echo "$buah[2]<br>";
$buah[]="anggur";
$buah[4]="durian";
$buah[1]="semangka";

foreach($buah as $fruit){
    echo "$fruit<br>";
}

var_dump($buah);

?>