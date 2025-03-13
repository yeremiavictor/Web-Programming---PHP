<?php
// mmbuat fungsi
function perkenalan($nama, $salam = "Ohayooo")
{
    echo $salam . ", ";
    echo "Perkenalkan,  saya " . $nama . "<br/>";
    echo "Senang berkenalan sama kamu<br/>";
}

// memanggil fungsi yang sudah dibuat
perkenalan("Dias", "Hi");

echo "<hr>";

$saya = "Larman";
$ucapanSalam = "Selamat pagi";
// memanggilnya lagi tanpa mengisi parameter salam
perkenalan($saya);
