<?php
$first_name = "Emeralda";
$last_name = "Iffatud Diana";

for ($i = 1; $i <= 100; $i++) {
    // If divisible by 3 & 5
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo $first_name . " " . $last_name . "<br>";
    }
    // If divisible by 3
    elseif ($i % 3 == 0) {
        echo $first_name . "<br>";
    }
    // If divisible by 5
    elseif ($i % 5 == 0) {
        echo $last_name . "<br>";
    }
    // Display as usual 
    else {
        echo $i . "<br>";
    }
}
?>