<?php
// PENGULANGAN/LOOP
// FOR (Pengulangan sebanyak jumlah yang ditentukan)
// WHILE (Pengulangan selama pengkondisian menghasilkan nilai "true")
// DO WHILE (Hampir sama dengan while, hanya pengecekan kondisi diakhir tiap pengulangan)
// FOREACH (Pengulangan sebanyak elemen array)

// FOR
// for ($var=startValue; $var<=endValue; $var=$var+increment) {
//     blok program
// }

// contoh:
echo "<h2>Pengulangan 1 - 10</h2>";
for ($i = 1; $i <= 10; $i++) {
    echo $i . "<br>";
}

// WHILE
// $var=startValue;
// while ($var<=endValue) {
//     source code;
//     $val = $val+increment;
// }

// contoh:
echo "<h2>Pengulangan 1 - 10</h2>";
$i = 1;
while ($i <= 10) {
    echo $i . "<br>";
    $i++;
}

// DO WHILE
// $var=startValue;
// do {
//     source code;
//     $val = $val+increment;
// }
// while ($var<=endValue);

// contoh:
echo "<h2>Pengulangan 1 - 10</h2>";
$i = 1;
do {
    echo $i . "<br>";
    $i++;
}
while ($i <= 10);

// PENGKONDISIAN IF
// if (expression)
//          statement

// contoh:
if ($userid == "informatika") {
    echo "benar";
}

// PENGKONDISIAN IF ELSE
// contoh:
if ($userid == "informatika") {
    echo "benar";
} else {
    echo "salah";
}

$x = 30;
if ($x < 20) {
    echo "benar";
} else {
    echo "salah";
}

// PENGKONDISIAN IF ELSE IF
// contoh:
$nama_hari = date("1");
if ($nama_hari == "Sunday") {
    echo "Minggu";
} elseif ($nama_hari == "Monday") {
    echo "Senin";
} else {
    echo "Selasa";
}

// PENGKONDISIAN SWITCH
// contoh:
$nama_hari = date("1");
switch ($nama_hari) {
    case "Monday":
    case "Tuesday":
    case "Wednesday":
        echo "Hari Kerja";
        break;
    case "Saturday":
    case "Sunday":
        echo "Hari Libur";
        break;
}

// TERNARY 
// - Menggunakan tanda "?"
// - Merupakan model penyederhanaan dari if...else
// - Cocok untuk melakukan proses pengisian variabel suatu hasil pengujian

// namaVariabel = (kondisi)? Nilai1 : Nilai2;

// contoh:
$greeting = (date("H" <= 12) ? "Selamat Pagi" : "Selamat Siang");
echo $greeting;

?>