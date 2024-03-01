<?php
function urutanAngka($angka)
{
    $order = 1; // VARIABLE THAT ARE SUBJECT TO REPETITION
    // THE REPETITION FORMULA
    for ($i = 1; $i <= $angka; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "$order "; // TO SHOW THE RESULT
            $order++; // SO THAT THE VARIABLE INCREASES BY 1
        }
        echo "<br>";
    }
}

echo urutanAngka(5);
?>