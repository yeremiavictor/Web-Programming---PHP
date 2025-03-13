<?php

// membuat variabel di php mudah
// perlu di ingat, nama variabel tidak boleh di awali dengan simbol dan angka
$nama = "Yeremia Victor";
$alamat = "Malang";
$hobi = "ngeband";

echo  $nama . " " . $alamat . " " . $hobi;
echo "<br>";

//variabel juga dapat di tindih atau isi dengan nilai baru contoh:
$hobi = "ngoding";

echo  $nama . " " . $alamat . " " . $hobi;

// variabel itu harus di isi kalau mau kosongi:
$contoh = "";
$contoh2 = 0;
$contoh3 = NULL;

// variabel ini sensitive case
$a = 1;
$A = 2;

echo "<br>";
printf("saya panggil var a: %d, var A: %d", $a, $A);
echo "<br>";
echo "<br>";

//untuk echo dengan petik dua: " dapat menggunakan  dipanggil dengan $
echo "saya panggil var a: $a"; // kalau petik 2
echo "<br>";
echo 'saya panggil var a:' . $a; // kalau petik 1

//contoh konversi
$konversi = "1";  // mula-mual $konversi dalam bentuk string (ASCII 49)
$konversi *= 2;   // $konversi sekarang adalah integer (2)
$konversi = $konversi * 1.3;  // $konversi sekarang adalah float (2.6)
$konversi = 5 * "10"; // $konversi sekarang adalah integer (50)
$konversi = 5 * "10";     // $konversi sekarang adalah integer (50)

// atau juga bisa dengan cara:
$a = "32";
$a = (int) $a; // ubah nilai a menjadi integer
$a = (float) $a; // ubah nilai a menjadi float
$a = (string) $a; // ubah nilai a menjadi string

// gimana cara hapus memori variabel?
echo "</br>";
$lupakan = "apa ingat";
echo $lupakan;
unset($lupakan);

echo "</br>";

// Membuat konstanta -> nilai yang tidak akan berubah
const TEST = TRUE;
echo "Konstanta tes: " . TEST;
