<html lang="nl">
<head>
    <meta name="author" content="mark">
    <meta charset="UTF-8">
    <title>gar-read-auto1.hp</title>
    <link rel="stylesheet" href="css/stylesheet.css">

</head>
<body>
<p>
    Dit zijn alle gegevens uit de
    tabel klanten van de database garage
</p>
<?php
// tabel uitlezen en netjes afdrukken
require_once "gar-connect.php";

$autos = $conn->prepare("
                select * from auto
");
$autos->execute();

echo "<table>";
foreach($autos as $auto)
{
    echo "<tr>";
    echo "<td>" . $auto["autokenteken"]    .  "</td>";
    echo "<td>" . $auto["automerk"]    .  "</td>";
    echo "<td>" . $auto["autotype"]    .  "</td>";
    echo "<td>" . $auto["autokmstand"]    .  "</td>";
    echo "<td>" . $auto["klantid"]    .  "</td>";

    echo "</tr>";
}
echo "</table>";
echo "<a href='gar-menu.php'> terug naar het menu </a>";
?>

</body>
</html>