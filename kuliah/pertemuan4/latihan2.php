<?php
// Hitung total 2 volume kubus
// Sisi kubus a = 9, sisi kubus b = 4

$sisi_a = 9;
$sisi_b = 4;

$volume_a = $sisi_a * $sisi_a * $sisi_a;
$volume_b = $sisi_b * $sisi_b * $sisi_b;

$total = $volume_a + $volume_b;

// echo $sisi_a * $sisi_a * $sisi_a + $sisi_b * $sisi_b * $sisi_b;
// echo pow($sisi_a, 3) + pow($sisi_b, 3);
// echo pow($sisi_a, 3);

// function luas_dua_kubs($a, $b)
// {
//     // Lakukan sesuatu disini

//     // return sesuatu (jika diperlukan) dari proses fungsi
// }

function total_volume_dua_kubus($a, $b)
{
    $volume_a = $a * $a * $a;
    $volume_b = $b * $b * $b;

    $total = $volume_a + $volume_b;

    return $total;
}

echo "Total Volume Kubus A dan B = " . total_volume_dua_kubus(9, 4);
echo "<br>";
echo "Total Volume Kubus C dan D = " . total_volume_dua_kubus(10, 15);
echo "<br>";
?>