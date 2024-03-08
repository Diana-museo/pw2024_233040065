<?php
$hardware = ["Motherboard", "Processor", "Hard Disk", "PC Coller", "VGA Card", "SSD"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hardware</title>
</head>

<body>
    <h3>Macam-macam perangkat keras komputer</h3>
    <ol>
        <?php foreach ($hardware as $hw): ?>
            <li>
                <?= $hw; ?>
            </li>
        <?php endforeach; ?>
    </ol>
</body>

</html>

<?php
array_push($hardware, "Card Reader", "Modem");
sort($hardware);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hardware</title>
</head>

<body>
    <h3>Macam-macam perangkat keras komputer</h3>
    <ol>
        <?php foreach ($hardware as $hw): ?>
            <li>
                <?= $hw; ?>
            </li>
        <?php endforeach; ?>
    </ol>
</body>

</html>