<!DOCTYPE HTML>
<html lang="nl">
<head>
    <title>
        Klant met auto
    </title>
    <link rel="stylesheet" href="css/stylesheet.css">


</head>
<body>
<h1>klant met auto</h1>
<h2>welke klant welke auto heeft</h2>
<?php
require_once "gar-connect.php";

$klanten = $conn->prepare(" SELECT klant.klantid, klantnaam, autokenteken, automerk, autotype FROM klant, auto WHERE klant.klantid = 
 auto.klantid ");

$klanten->execute();

echo "<table>";
foreach ($klanten as $klant){
    echo "<tr>";
    echo "<td>" . $klant["klantid"]           . "</td>";
    echo "<td>" . $klant["klantnaam"]         . "</td>";
    echo "<td>" . $klant["autokenteken"]      . "</td>";
    echo "<td>" . $klant["automerk"]          ."</td>";
    echo "<td>" . $klant["autotype"]          ."</td>";
    echo "</tr>";
    echo "</table>";

}
echo "</br>";
echo "<a href='gar-menu.php'>terug naar het menu</a>";
?>
</body>
</html>