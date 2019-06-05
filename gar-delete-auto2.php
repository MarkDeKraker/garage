<!doctype html>
<html lang="nl">
<head>
    <meta name="author" content="Mark"
    <meta charset="UTF-8">
    <title>gar-delete-auto2.php</title>
    <link rel="stylesheet" href="css/stylesheet.css">
</head>
<body>
<h1>garage delete auto 2</h1>
<?php

$autokenteken = $_POST {"autokentekenvak"};
require_once "gar-connect.php";
$autos = $conn->prepare("
		select * from auto where autokenteken = :autokenteken
		");

$autos->execute(["autokenteken" => $autokenteken]);

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
echo "</table><br />";

echo "<form action='gar-delete-auto3.php' method='post'>";
echo "<input type='hidden' name='autokentekenvak' value='$autokenteken'>";
echo "<input type='checkbox' name='verwijdervak' value='1'>";

echo "Verwijder deze auto. <br />";
echo "<input type='submit'>";
echo "</form>";
?>
</body>
</html>