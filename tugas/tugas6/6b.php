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
    <h1>Number of Stairs</h1>
    <ul>
        <form action="" method="post">
            <li>
                <label for="number">Input Number : </label>
                <input type="text" name="number" id="number">
            </li>
            <br>
            <li>
                <button type="submit" name="submit">Submit Here, guys!</button>
            </li>
        </form>
    </ul>
    <br>
    <?php
    if (isset ($_POST["submit"])) {
        $number = $_POST["number"];
        for ($i = $number; $i >= 1; $i--) {
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