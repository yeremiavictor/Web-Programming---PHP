<?php
// membuat array asosiatif
$artikel = [
    "judul" => "Belajar mengatur Emosi",
    "penulis" => "Evan",
    "view" => 32
];

// mencetak isi array asosiatif
echo "<h2>" . $artikel["judul"] . "</h2>";
echo "<p>oleh: " . $artikel["penulis"] . "</p>";
echo "<p>View: " . $artikel["view"] . "</p>";
