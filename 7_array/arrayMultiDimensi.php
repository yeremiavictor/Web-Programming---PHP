<?php
// ini adalah array dua dimensi
$matrik = [
    [2, 3, 4],
    [7, 5, 0],
    [4, 3, 8],
];

// cara mengakses isinya
echo $matrik[1][0]; //-> output: 7


// Aray multi dimensi
$artikel = [
    [
        "judul" => "Belajar PHP untuk Pemula",
        "penulis" => "Catur"
    ],
    [
        "judul" => "Tutorial C dari Nol hingga Mahir",
        "penulis" => "Selvia"
    ],
    [
        "judul" => "Membuat Aplikasi Web dengan PHP",
        "penulis" => "Zadrak"
    ]
];

// menampilkan array
foreach ($artikel as $post) {
    echo "<h2>" . $post["judul"] . "</h2>";
    echo "<p>" . $post["penulis"] . "<p>";
    echo "<hr>";
}
