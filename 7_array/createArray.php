<?php

// membuat array kosong
$buah = array();
$hobi = [];

// membuat array sekaligus mengisinya
$minuman = array("Kopi", "Teh", "Jus Jeruk");
$makanan = ["Nasi Goreng", "Soto", "Bubur"];

// membuat array dengan mengisi indeks tertentu
$anggota[1] = "Yeremia";
$anggota[2] = "Victor";
$anggota[0] = "Upitra";

// menampilkan isi array
echo $barang[0] . "<br>";
echo $barang[1] . "<br>";
echo $barang[2] . "<br>";

// menampilkan isi array dengan perulangan for
for ($i = 0; $i < count($makanan); $i++) {
    echo $makanan[$i] . "<br>";
}

echo "<hr>";

// menampilkan isi array dengan perulangan while
$i = 0;
while ($i < count($makanan)) {
    echo $makanan[$i] . "<br>";
    $i++;
}
