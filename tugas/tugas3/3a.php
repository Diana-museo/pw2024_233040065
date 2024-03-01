<?php
// CALCULATE THE AREA OF THE CIRCLE
echo "<h4>Menghitung Luas Lingkaran</h4>";
function hitungLuasLingkaran($r)
{
    echo "Jari-jari = " . $r . " cm. <br>";
    $area = 3.14 * $r * $r;

    echo "Luas Lingkaran = $area cm<sup>2</sup>";
}

hitungLuasLingkaran(10);
echo "<hr>";


// CALCULATE AROUND OF THE CIRCLE
echo "<h4>Menghitung Keliling Lingkaran</h4>";
function hitungKelilingLingkaran($r)
{
    echo "Jari-jari = " . $r . " cm. <br>";
    $around = 2 * 3.14 * $r;

    echo "Keliling Lingkaran = $around cm";
}

hitungKelilingLingkaran(20);
echo "<hr>";
?>