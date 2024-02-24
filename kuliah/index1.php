<?php
// Pertemuan 2 - PHP Dasar
// Sintaks PHP

// Standar Output
// echo, print (mencetak tulisa, isi variabel)
// print_r (khusus mencetak isi array, dipakai saat debugging)
// var_dump (melihat isi dari variabel, dipakai saat debugging)

$nama = "Emeralda Iffatud Diana";

echo "$nama";

// Penulisan sintaks PHP
// 1. PHP di dalam HTML <h1>Halo, selamat datang <?php echo "Diana"; ?|></h1> [TIDAK DISARANKAN]
// 2. HTML di dalam PHP <?php echo "<h1>Halo, selamat datang Diana</h1> ?|>

// Variabel dan Tipe Data
// Variabel
// $nama1 = "Diana";
// 1. Tidak boleh diawali dengan angka, namun boleh mengandung angka

// Operator
// Aritmatika
// + - * / %

echo 1 * 2;

// Operator Penggabung String / Concatenation / Concat
//  .

$nama_depan = "Emeralda";
$nama_belakang = "Iffatud Diana";

echo $nama_depan . " " . $nama_belakang;

// Operator Penugasan / Assignment
// =, +=, -=, *=, /=, %=, .=

$x = 1;
$x += 5;
echo $x;

$nama = "Emeralda";
$nama .= " ";
$nama .= "Iffatud Diana";

echo $nama;

// Operator Perbandingan
// <, >, <=, >=, ==
// Tidak mengecek tipe data

var_dump(1 == "1");

// Identitas
// ===, !==

var_dump(2 === "2");

// Logika
// &&(and), ||(or), !

$x = 10;
var_dump($x < 20 && $x % 2 == 0);
?>

// PHP DALAM HTML TANPA STRING
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
    <style>
        .warna-baris {
            background-color: silver;
        }
    </style>
</head>

<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($i = 1; $i <= 3; $i++): ?>
            <?php if ($i % 2 == 1): ?>
                <tr class="warna-baris">
                <?php else: ?>
                <tr>
                <?php endif; ?>
                <?php for ($j = 1; $j <= 10; $j++): ?>
                    <td>
                        <?php echo "$i,$j"; ?>
                        <!-- <?= "$i,$j"; ?> -->
                    </td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>

</html>