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

        .items {
            background-color: salmon;
            display: flex;
            width: 100px;
            height: 100px;
            border: 2px solid black;
            align-items: center;
            justify-content: space-around;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="items">1</div>
    </div>
    <div class="container">
        <div class="items">2</div>
        <div class="items">2</div>
    </div>
    <div class="container">
        <div class="items">3</div>
        <div class="items">3</div>
        <div class="items">3</div>
    </div>
</body>

</html>