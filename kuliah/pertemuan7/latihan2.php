<?php
// IMPLEMENTASI METODE REQUEST GET DAN VARIABLE SUPERGLOBALS $_GET
// METODE REQUEST GET ADALAH UNTUK MELIHAT ATAU MENGGUNAKAN DATA YANG DIKIRIM. Pengiriman data melalui url dan bisa diambil atau ditangkap oleh variable superglobals $_GET.
// SUPERGLOBALS VARIABLE $_GET ADALAH ARRAY ASOSIATIF UNTUK MENERIMA DATA YANG DIKIRIMKAN

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
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>

<body>
    <h1>Daftar Film</h1>
    <ul>
        <?php foreach ($film as $f): ?>
            <li>
                <a
                    href="latihan3.php?judul=<?= $f["judul"]; ?>&sutradara=<?= $f["sutradara"]; ?>&produksi=<?= $f["produksi"]; ?>&tahun=<?= $f["tahun"]; ?>&genre=<?= $f["genre"]; ?>&aktor=<?= $f["aktor"]; ?>&gambar=<?= $f["gambar"]; ?>">
                    <?= $f["judul"]; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>