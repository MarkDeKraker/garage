<!doctype html>
<html lang="nl">
<head>
    <meta name="author" content="Anjo Eijeriks">
    <meta charset="UTF-8">
    <title>gar-update-auto3.php</title>
    <link rel="stylesheet" href="css/.css">
</head>
<body>
<h1>garage update auto 3</h1>
<p>
    Autogegevens wijzigen in de tabel
    auto van de database garage.
</p>
<?php
// autogegevens uit het formulier halen --------------------------

$automerk 		= $_POST["automerkvak"];
$autotype	 	= $_POST["autotypevak"];
$autokmstand 	= $_POST["autokmstandvak"];
$klantid		= $_POST["klantidvak"];
$autokenteken	= $_POST["autokentekenvak"];
// updaten klantgegevens ------------------------------------------
require_once "gar-connect.php";

$sql = $conn->prepare("	update auto set		automerk 		= :automerk, 
														autotype 		= :autotype,
														autokmstand 	= :autokmstand,
														klantid			= :klantid
												 where 	autokenteken	= :autokenteken
								 ");

$sql->execute([

    "automerk"		=> $automerk,
    "autotype"		=> $autotype,
    "autokmstand"	=> $autokmstand,
    "klantid"		=> $klantid,
    "autokenteken"	=> $autokenteken
]);

echo "De auto is gewijzigd. <br />";
echo "<a href='gar-menu.php'> terug naar het menu </a>";
?>
</body>
</html>