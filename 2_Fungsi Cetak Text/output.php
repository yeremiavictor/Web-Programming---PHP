<?php
// Berikut ini adalah contoh penggunaan echo
echo "<h2> Belajar PHP tidak susah </h2>";
echo ("Halo Dunia </br>");
echo "Sedang belajar menggunakan beragam echo <br>";
echo "ini ", "contoh ", "teks ", "terpisah ";

// print -> perbedaannya akan selalu mengembalikan angka 1 setiap di exekusi, print hanya bisa 1 parameter
print "<h2> Ini adalah contoh penggunaan print </h2>";
print "halo dunia";

//penggunaan print untuk ini akan menghasilkan error
//print("Hello", "World");

// mari kita coba dengan cara yang lebih kompleks
$txt1 = "Latihan PHP";
$txt2 = "Mahasiswa Upitra";

$x = 5;
$y = 2;

echo "<h2>" . $txt1 . "</h2>";
echo "Kita adalah " . $txt2 . "<br>";
echo $x * $y;

//sama seperti menggunakan C
// kita dapat menggunakan %s (string), %d (desimal), %i (integer), %b (boolean) untuk memanggil variabel di printf
printf(" <br> Kita adalah bagian dari %s angkatan %d <br><br>", $txt2, $y);

// gimana cetak tanda petik
echo "saya mau memberikan tanda petik \" ";
