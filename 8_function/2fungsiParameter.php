<?php
// mmbuat fungsi
function perkenalan($nama, $salam)
{
    echo $salam . ", ";
    echo "Perkenalkan, nama saya " . $nama . "<br/>";
    echo "Senang berkenalan dengan anda<br/>";
}

// memanggil fungsi yang sudah dibuat
perkenalan("Pernando", "Hi");

echo "<hr>";

$saya = "Reno";
$ucapanSalam = "Selamat in aja";
// memanggilnya lagi
perkenalan($saya, $ucapanSalam);
