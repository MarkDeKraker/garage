<!doctype html>
<html lang="nl">
<head>
    <meta name="author" content="Mark"
    <meta charset="UTF-8">
    <title>gar-create-klant2.php</title>
    <link rel="stylesheet" href="css/stylesheet.css">
</head>
<body>
<h1>garage create klant 2</h1>
<p>
    Een klant toevoegen aan de tabel klant in de database.
</p>
<?php
// klantgegevens uit het formulier halen
$klantid            = NULL;   // komt niet uit het formulier (autoincrement)
$klantnaam          = $_POST["klantnaamvak"];
$klantadres         = $_POST["klantadresvak"];
$klantpostcode      = $_POST["klantpostcodevak"];
$klantplaats        = $_POST["klantplaatsvak"];

// klantgegevens invoeren in de tabel
require_once "gar-connect.php";

$sq1 = $conn->prepare("
                      insert into klant values 
                      (
                          :klantid, :klantnaam, :klantadres,
                          :klantpostcode, :klantplaats
                      )
                      ");

//manier 1 (of manier 2 gebruiken)
 //$sg1->bindParam(":klantid",              $klantid);
 //$sq1->bindParam(":klantnaam",            $klantnaam);
 //$sg1->bindParam(":klantadres",           $klantadres);
 //$sq1->bindParam(":klantpostcode",        $klantpostcode);
 //$sg1->bindParam(":klantplaats",          $klantplaats);
 //$sq1->bindParam(":klantnaam",            $klantnaam);

 $sq1-> execute([
     "klantid"   => $klantid,
     "klantnaam"   => $klantnaam,
     "klantadres"   => $klantadres,
     "klantpostcode"   => $klantpostcode,
     "klantplaats"   => $klantplaats
 ]);

 echo "De klant is toegevoegd <br />";
 echo "<a href='gar-menu.php'> terug naar het menu </a>";
 ?>
</body>
</html>


