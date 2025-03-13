<?php

// membuat array
$hewan = [
    "Guguk",
    "Kucing",
    "Hamster"
];

// menghapus kucing
unset($hewan[1]);

echo $hewan[0] . "<br>";
echo $hewan[1] . "<br>";
echo $hewan[2] . "<br>";

echo "<hr>";

echo "<pre>";
print_r($hewan);
echo "</pre>";


//menambahkan isi array
// menambahkan isi pada idenks ke-3
$hewan[3] = "Derkuku";

// menambahkan isi pada indeks terakhir
$hobi[] = "Ikan";

// cetak array dengan perulangan
foreach ($hewan as $peliharaan) {
    echo $peliharaan . "<br>";
}

//Apabila kita menambahkan pada indeks yang sudah memiliki isi, maka isinya akan ditindih dengan yang baru.
