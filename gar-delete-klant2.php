<!doctype html>
<html lang="nl">
<head>
    <meta name="author" content="Mark"
    <meta charset="UTF-8">
    <title>gar-delete-update2.php</title>
    <link rel="stylesheet" href="css/stylesheet.css">

</head>
<body>
<h1>garage delete klant 2</h1>
<?php

$klantid = $_POST {"klantidvak"};
require_once "gar-connect.php";
$klanten = $conn->prepare("
		select * from klant where klantid = :klantid
		");

$klanten->execute(["klantid" => $klantid]);

echo "<table>";
foreach($klanten as $klant)
{
    echo "<tr>";
    echo "<td>" . $klant["klantid"]    .  "</td>";
    echo "<td>" . $klant["klantnaam"]    .  "</td>";
    echo "<td>" . $klant["klantadres"]    .  "</td>";
    echo "<td>" . $klant["klantpostcode"]    .  "</td>";
    echo "<td>" . $klant["klantplaats"]    .  "</td>";
    echo "</tr>";
}
echo "</table><br />";

echo "<form action='gar-delete-klant3.php' method='post'>";
echo "<input type='hidden' name='klantidvak' value='$klantid'>";
echo "hallo";
echo "<input type='checkbox' name='verwijdervak' value='1'>";
echo "dag";

echo "Verwijder deze klant. <br />";
echo "<input type='submit'>";
echo "</form>";
?>
</body>
</html>
