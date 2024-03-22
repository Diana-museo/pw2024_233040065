<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 6a</title>
    <style>
        .odd,
        .even {
            width: 30px;
            height: 30px;
            background-color: darkseagreen;
            border: 1px solid black;
            display: inline-block;
            text-align: center;
            line-height: 30px;
        }

        .even {
            background-color: lightslategrey;
        }
    </style>
</head>

<body>
    <a href="?num=10">The default is 10... Please, Input Number on URL!</a>
    <br>
    <br>
    <hr>
    <br>
    <?php
    if (isset ($_GET["num"])) {
        $num = $_GET["num"];
        for ($i = $num; $i >= 1; $i--) {
            for ($j = 1; $j <= $i; $j++) {
                if ($i % 2 == 0) {
                    echo '<div class="even">' . $i . '</div>';
                } else {
                    echo '<div class="odd">' . $i . '</div>';
                }
            }
            echo "<br>";
        }
    } else {

    }
    ?>
</body>

</html>