<!DOCTYPE html>
<html lang="nl">
<head>
    <meta name="author" content="mark">
    <meta charset="UTF-8">
    <title>gar-read-klant2.php</title>
    <link rel="stylesheet" href="css/stylesheet.css">

</head>
<body>
<h1>garage delete klant 3</h1>
<?php
$klantid      = $_POST["klantidvak"];

if(isset($_POST["verwijdervak"]))
{

    require_once "gar-connect.php";

    $sql = $conn->prepare("
                            delete from klant
                            where  klantid = :klantid
       ");
    $sql->execute(["klantid" => $klantid]);
    }
    else
    {
        echo "De gegevens zijn niet verwijderd. <br />";

}

echo "<a href='gar-menu.php'>Terug naar het menu </a>";
    ?>
</body>
</html>

