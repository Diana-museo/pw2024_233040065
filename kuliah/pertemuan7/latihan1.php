<!-- GET & POST -->
<!-- SUPERGLOBALS -->
<!-- VARIABLE SCOPE / LINGKUP VARIABEL -->

<?php
$x = 10;

function tampilX()
{
    // Keyword Global mencari variabel x di luar lingkup variabel lokal (function) untuk mengisi exho $x
    global $x;
    echo $x;
}

tampilX();
// Variabel superglobals adalah variabel yang sudah dimiliki oleh php yang bisa diakses dimanapun dan kapanpun di halaman php

// variabel superglobals (TIPENYA ADALAH ARRAY ASSOCIATIVE)
// 1. $_GET
// 2. $_POST
// 3. $_REQUEST
// 4. $_SESSION
// 5. $_COOKIE
// 6. $_SERVER
// 7. $_ENV

echo "<br>";
echo $_SERVER["SERVER_NAME"];
?>