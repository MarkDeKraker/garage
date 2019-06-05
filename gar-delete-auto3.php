<!DOCTYPE html>
<html lang="nl">
<head>
    <meta name="author" content="mark">
    <meta charset="UTF-8">
    <title>gar-read-auto3.php</title>
    <link rel="stylesheet" href="css/stylesheet.css">

</head>
<body>
<h1>garage delete auto 3</h1>
<?php
$autokenteken      = $_POST["autokentekenvak"];

if(isset($_POST["verwijdervak"]))
{
    +

    require_once "gar-connect.php";

    $sql = $conn->prepare("
                            delete from auto
                            where  autokenteken = :autokenteken
       ");
    $sql->execute(["autokenteken" => $autokenteken]);
}
else
{
    echo "De gegevens zijn niet verwijderd. <br />";

}

echo "<a href='gar-menu.php'>Terug naar het menu </a>";
?>
</body>
</html>
