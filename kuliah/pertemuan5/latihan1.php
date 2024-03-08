<?php
// ARRAY

// 1. Membuat Array
$hari = array("Senin", "Selasa", "Rabu");
$bulan = ["Januari", "Februari", "Maret"];
$mhs = ["Emeralda", 3.79];

var_dump($mhs);

// 2. Mencetak Array (1)
echo "<br>";
echo "$mhs[1]";
echo "<br>";

// 3. Memanipulasi Array
// Menambah Isi Array
// Menambah di belakang/akhir : [] atau array_push (function)
$hari[] = "Kamis";
array_push($bulan, "april");

// Di awal : array_unshift

// Menghapus Isi Array
// Di belakang : array_pop()
array_pop($hari);
print_r($hari);
echo "<br>";

// Di awal : array_shift()
array_shift($bulan);
print_r($bulan);
?>