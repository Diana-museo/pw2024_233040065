<?php
$film = [
    [
        "judul" => "A Quiet Place",
        "sutradara" => "John Krasinki",
        "produksi" => "Platinum Dunes, Sunday Night, Paramount Pictures",
        "tahun" => "2018",
        "genre" => "Science-fiction, Horror, Post-apocalyptic",
        "aktor" => "Emily Blunt, John Krasinki",
        "gambar" => "A Quiet Place.jpg"
    ],
    [
        "judul" => "Badla",
        "sutradara" => "Sujoy Ghosh",
        "produksi" => "Red Chillies Entertainment, Azure Entertainment, AA Films",
        "tahun" => "2019",
        "genre" => "Mystery, Thriller",
        "aktor" => "Amitabh Bachchan, Taapsee Pannu",
        "gambar" => "Badla.jpg"
    ],
    [
        "judul" => "Divergent",
        "sutradara" => "Neil Burger",
        "produksi" => "Red Wagon Entertainment, Summit Entertainment, Lionsgate",
        "tahun" => "2014",
        "genre" => "Dystopian, Science-fiction, Action",
        "aktor" => "Shailene Woodley, Theo James",
        "gambar" => "Divergent.jpg"
    ],
    [
        "judul" => "Don't Breathe",
        "sutradara" => "Fede Alvarez",
        "produksi" => "Screen Gems, Stage 6 Films, Ghost House Pictures, Good Universe, Sony Pictures",
        "tahun" => "2016",
        "genre" => "Horror-thriller",
        "aktor" => "Jane Levy, Dylan Minnette, Daniel Zovatto, Stephen Lang",
        "gambar" => "Don't Breathe.jpg"
    ],
    [
        "judul" => "The Hunger Games",
        "sutradara" => "Gary Ross",
        "produksi" => "Color Force, Lionsgate",
        "tahun" => "2012",
        "genre" => "Dystopian, Action",
        "aktor" => "Jennifer Lawrence, Josh Hutcherson",
        "gambar" => "Hunger Games.jpg"
    ],
    [
        "judul" => "Knives Out",
        "sutradara" => "Rian Johnson",
        "produksi" => "MRC, T-Street Productions, Ram Bergman Production, Lionsgate",
        "tahun" => "2019",
        "genre" => "Mystery",
        "aktor" => "Daniel Craig, Chris Evans, Ana de Armas, Jamie Lee Curtis",
        "gambar" => "Knives Out.jpg"
    ],
    [
        "judul" => "Now You See Me",
        "sutradara" => "Louis Leterrier",
        "produksi" => "Summit Entertainment, K/O Paper Products, Lionsgate",
        "tahun" => "2013",
        "genre" => "Heist Film, Criminal",
        "aktor" => "Jesse Eisenberg, Mark Ruffalo, Woody Harrelson, Melanie Laurent",
        "gambar" => "Now You See Me.jpg"
    ],
    [
        "judul" => "Shutter Island",
        "sutradara" => "Martin Scorsese",
        "produksi" => "Phoenix Pictures, Sikelia Productions, Appian Way Productions, Paramount Pictures",
        "tahun" => "2010",
        "genre" => "Neo-noir, Psychological, Thriller",
        "aktor" => "Leonardo DiCaprio, Mark Ruffalo",
        "gambar" => "Shutter Island.jpg"
    ],
    [
        "judul" => "The Boy",
        "sutradara" => "William Brent Bell",
        "produksi" => "Lakeshore Entertainment, Huayi Brothers Pictures, Vertigo Entertainment, STXfilms",
        "tahun" => "2016",
        "genre" => "Horror",
        "aktor" => "James Russell, Lauren Cohan",
        "gambar" => "The Boy.jpg"
    ],
    [
        "judul" => "The Call",
        "sutradara" => "Lee Chung-Hyun",
        "produksi" => "Yong Film, Next Entertainment World, Netflix",
        "tahun" => "2020",
        "genre" => "Psychological, Thriller",
        "aktor" => "Park Shin-Hye, Jeon Jong-Seo, Kim Sung-Ryung, Lee El",
        "gambar" => "The Call.jpg"
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Best Films</title>
</head>

<body>
    <h1>List of Best Films</h1>
    <?php foreach ($film as $f): ?>
        <ul>
            <li>
                <img src="img/<?= $f["gambar"]; ?>" alt="">
            </li>
            <li>Judul Film :
                <?= $f["judul"]; ?>
            </li>
            <li>Sutradara :
                <?= $f["sutradara"]; ?>
            </li>
            <li>Produksi :
                <?= $f["produksi"]; ?>
            </li>
            <li>Tahun Rilis :
                <?= $f["tahun"]; ?>
            </li>
            <li>Genre :
                <?= $f["genre"]; ?>
            </li>
            <li>Aktor Utama :
                <?= $f["aktor"]; ?>
            </li>
        </ul>
        <br>20
    <?php endforeach; ?>
</body>

</html>