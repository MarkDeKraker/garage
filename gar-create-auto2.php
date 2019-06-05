<!doctype html>
<html lang="nl">
<head>
    <meta name="author" content="Mark"
    <meta charset="UTF-8">
    <title>gar-create-auto2.php</title>
    <link rel="stylesheet" href="css/stylesheet.css">
</head>
<body>
<h1>garage create auto 2</h1>
<?php
// klantgegevens uit het formulier halen
$autokenteken        = $_POST["autokentekenvak"];
$automerk         = $_POST["automerkvak"];
$autotype      = $_POST["autotypevak"];
$autokmstand        = $_POST["autokmstandvak"];
$klantid            = $_POST["klantidvak"];   // komt niet uit het formulier (autoincrement)

// klantgegevens invoeren in de tabel
require_once "gar-connect.php";

$sq1 = $conn->prepare("
                      insert into auto values 
                      (
                          :autokenteken, :automerk, :autotype,
                          :autokmstand, :klantid
                      )
                      ");


$sq1-> execute([
    "autokenteken"   => $autokenteken,
    "automerk"   => $automerk,
    "autotype"   => $autotype,
    "autokmstand"   => $autokmstand,
    "klantid"   => $klantid
]);

echo "De auto is toegevoegd <br />";
echo "<a href='gar-menu.php'> terug naar het menu </a>";
?>
</body>
</html>