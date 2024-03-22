<?php
// CHECK WHETHER THE SUBMIT BUTTON HAS BEEN PRESSED OR NOT
if (isset ($_POST["submit"])) {
    // CHECK USERNAME AND PASS
    if ($_POST["name"] == "admin" && $_POST["pass"] == "123") {
        // IF THE VALUE IS TRUE, REDIRECT TO ADMIN PAGE
        header("Location: admin.php");
        exit;
    } else {
        // IF IT'S FALSE, SHOW 'WRONG' MESSAGE
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        @font-face {
            font-family: 'pix';
            src: url(assets/font/PixelifySans-Medium.ttf);
        }

        body {
            background-color: lightblue;
            text-align: center;
            font-family: 'pix';
        }

        img {
            height: 15%;
            width: 15%;
            line-height: 150px;
        }

        form {
            line-height: 50px;
        }

        button {
            padding: 5px 5px;
        }

        h1 {
            font-size: 3rem;
            color: white;
            line-height: 150px;
            text-shadow: 2px 3px 1px black;
        }
    </style>
</head>

<body>
    <h1>LOGIN PAGE</h1>
    <img src="assets/img/buma.png" alt="">
    <?php if (isset ($error)): ?>
        <p style="color: red; font-style: italic;">Username / Password wrong!</p>
    <?php endif; ?>
    <form action="" method="post">
        <li>
            Username :
            <input type="text" name="name" style="padding: 5px 5px;">
        </li>
        <li>
            Password :
            <input type="password" name="pass" style="padding: 5px 5px;">
        </li>
        <button type="submit" name="submit">Come on in, buddy!</button>
    </form>
</body>

</html>