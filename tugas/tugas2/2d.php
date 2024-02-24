<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1c</title>
    <style>
        .container {
            display: flex;
        }

        /* Perubahan ukuran box, di 1c 100px. Di 2c 50px agar terlihat seluruh boxnya */
        .items {
            background-color: black;
            color: black;
            display: flex;
            width: 50px;
            height: 50px;
            border: 1px solid black;
            align-items: center;
            justify-content: space-around;
        }

        .items-two {
            background-color: white;
            color: white;
            display: flex;
            width: 50px;
            height: 50px;
            border: 1px solid black;
            align-items: center;
            justify-content: space-around;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php for ($i = 1; $i <= 5; $i++) {
            if ($i % 2 == 1) {
                echo '<div class="items">' . $i . '</div>';
            } else {
                echo '<div class="items-two">' . $i . '</div>';
            }
        } ?>
    </div>
    <div class="container">
        <?php for ($i = 1; $i <= 5; $i++) {
            if ($i % 2 == 1) {
                echo '<div class="items-two">' . $i . '</div>';
            } else {
                echo '<div class="items">' . $i . '</div>';
            }
        } ?>
    </div>
    <div class="container">
        <?php for ($i = 1; $i <= 5; $i++) {
            if ($i % 2 == 1) {
                echo '<div class="items">' . $i . '</div>';
            } else {
                echo '<div class="items-two">' . $i . '</div>';
            }
        } ?>
    </div>
    <div class="container">
        <?php for ($i = 1; $i <= 5; $i++) {
            if ($i % 2 == 1) {
                echo '<div class="items-two">' . $i . '</div>';
            } else {
                echo '<div class="items">' . $i . '</div>';
            }
        } ?>
    </div>
    <div class="container">
        <?php for ($i = 1; $i <= 5; $i++) {
            if ($i % 2 == 1) {
                echo '<div class="items">' . $i . '</div>';
            } else {
                echo '<div class="items-two">' . $i . '</div>';
            }
        } ?>
    </div>
</body>

</html>