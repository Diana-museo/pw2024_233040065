<?php
// Cek apakah tidak ada data di $_GET
if (
    !isset ($_GET["judul"]) ||
    !isset ($_GET["sutradara"]) ||
    !isset ($_GET["produksi"]) ||
    !isset ($_GET["tahun"]) ||
    !isset ($_GET["genre"]) ||
    !isset ($_GET["aktor"])
) {
    // REDIRECT (Untuk mengembalikan paksa user menuju halaman awal)

    header("Location: latihan2.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET2</title>
</head>

<body>
    <ul>
        <li><img src="img/<?= $_GET["gambar"]; ?>" alt=""></li>
        <li>
            <?= $_GET["judul"]; ?>
        </li>
        <li>
            <?= $_GET["sutradara"]; ?>
        </li>
        <li>
            <?= $_GET["produksi"]; ?>
        </li>
        <li>
            <?= $_GET["tahun"]; ?>
        </li>
        <li>
            <?= $_GET["genre"]; ?>
        </li>
        <li>
            <?= $_GET["aktor"]; ?>
        </li>
    </ul>

    <a href="latihan2.php">Kembali ke daftar mahasiswa</a>
</body>

</html>