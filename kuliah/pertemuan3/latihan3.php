<?php
echo "Mulai <br>";
echo "Hello World! <br>";
echo "Hello World! <br>";
echo "Hello World! <br>";
echo "Hello World! <br>";
echo "Hello World! <br>";
echo "Selesai <br>";

// LOOPING/ITERATION
// WHILE | FOR
// membutuhkan variable nilai awal
// while (kondisi terminasi) {
//     aksi

//     increment / decrement
// }

echo "Mulai <br>";

$nilai_awal = 2;
while ($nilai_awal <= 10) {
    echo "Hello World $nilai_awal x! <br>";
    $nilai_awal = $nilai_awal + 2;
}
;

echo "Selesai <br>";

echo "<hr>";

echo "Mulai <br>";

for ($nilai_awal = 1; $nilai_awal <= 10; $nilai_awal++) {
    echo "Hello World $i x! <br>";
}
;

echo "Selesai <br>";

echo "<hr>";

echo "Mulai <br>";

for ($i = 10; $i >= 1; $i--) {
    echo "Hello World $i x! <br>";
}
;

echo "Selesai <br>";
?>