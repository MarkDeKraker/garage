<!DOCTYPE html>
<html lang="nl">
<head>
    <meta name="author" content="mark">
    <meta charset="UTF-8">
    <title>gar-read-auto2.php</title>
    <link rel="stylesheet" href="css/stylesheet.css">

</head>
<body>
<h1>Garage zoek op kenteken 2</h1>
<?php
//klantid uit het formulier halen
$autokenteken = $_POST["autokentekenvak"];

// klantgegevens uit de tabel halen
require_once "gar-connect.php";

$autos = $conn->prepare("
                    select  autokenteken,
                                     automerk,
                                     autotype,
                                     autokmstand,
                                     klantid
                              from   auto
                              where  autokenteken = :autokenteken
");
$autos->execute(["autokenteken" => $autokenteken]);

echo "<table>";
foreach ($autos as $auto)
{
    echo "<tr>";
    echo "<td>" . $auto["autokenteken"]    .  "</td>";
    echo "<td>" . $auto["automerk"]    .  "</td>";
    echo "<td>" . $auto["autotype"]    .  "</td>";
    echo "<td>" . $auto["autokmstand"]    .  "</td>";
    echo "<td>" . $auto["klantid"]    .  "</td>";
    echo "</tr>";
}
echo "</table><br />";
echo "<a href='gar-menu.php'> terug naar het menu </a>";
?>

</body>
</html>