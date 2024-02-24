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
            background-color: salmon;
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
        <?php for ($i = 1; $i <= 10; $i++) {
            echo '<div class="items">' . $i . '</div>';
        } ?>
    </div>
    <div class="container">
        <?php for ($i = 1; $i <= 9; $i++) {
            echo '<div class="items">' . $i . '</div>';
        } ?>
    </div>
    <div class="container">
        <?php for ($i = 1; $i <= 8; $i++) {
            echo '<div class="items">' . $i . '</div>';
        } ?>
    </div>
    <div class="container">
        <?php for ($i = 1; $i <= 7; $i++) {
            echo '<div class="items">' . $i . '</div>';
        } ?>
    </div>
    <div class="container">
        <?php for ($i = 1; $i <= 6; $i++) {
            echo '<div class="items">' . $i . '</div>';
        } ?>
    </div>
    <div class="container">
        <?php for ($i = 1; $i <= 5; $i++) {
            echo '<div class="items">' . $i . '</div>';
        } ?>
    </div>
    <div class="container">
        <?php for ($i = 1; $i <= 4; $i++) {
            echo '<div class="items">' . $i . '</div>';
        } ?>
    </div>
    <div class="container">
        <?php for ($i = 1; $i <= 3; $i++) {
            echo '<div class="items">' . $i . '</div>';
        } ?>
    </div>
    <div class="container">
        <?php for ($i = 1; $i <= 2; $i++) {
            echo '<div class="items">' . $i . '</div>';
        } ?>
    </div>
    <div class="container">
        <?php for ($i = 1; $i <= 1; $i++) {
            echo '<div class="items">' . $i . '</div>';
        } ?>
    </div>
</body>

</html>