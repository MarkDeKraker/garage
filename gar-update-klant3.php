<!doctype html>
<html lang="nl">
<head>
    <meta name="author" content="Mark"
    <meta charset="UTF-8">
    <title>gar-create-update3.php</title>
    <link rel="stylesheet" href="css/stylesheet.css">
</head>
<body>
<h1>garage update klant 3</h1>
<?php

$klantid           =$_POST ["klantidvak"];
$klantnaam        =$_POST ["klantnaamvak"];
$klantadres       =$_POST ["klantadresvak"];
$klantpostcode    =$_POST ["klantpostcodevak"];
$klantplaats      =$_POST ["klantplaatsvak"];

require_once "gar-connect.php";
$sql = $conn->prepare
("
            update klant set   klantnaam      = :klantnaam,
                               klantadres     = :klantadres,
                               klantpostcode  = :klantpostcode,
                               klant  plaats    = :klantplaats
                               where  klantid = :klantid


        ");

$sql->execute
([
    "klantid"       => $klantid,
    "klantnaam"     => $klantnaam,
    "klantadres"    => $klantadres,
    "klantpostcode" => $klantpostcode,
    "klantplaats"   => $klantplaats

]);

echo "De klant is gewijzigd. <br />";
echo "<a href='gar-menu.php'> terug naar het menu </a>";
?>
</body>
</html>
