<!DOCTYPE html>
<html lang="en">
    <head>
        <title>gar-update-auto2.php</title>
            <link rel="stylesheet" href="css/stylesheet.css">
    </head>

    <body>
    <h1> garage update auto2</h1>

<?php

$autokenteken = $_POST {"autokentekenvak"};

require_once "gar-connect.php";

$autos = $conn->prepare("
		select * from auto where autokenteken = :autokenteken
		");

$autos->execute(["autokenteken" => $autokenteken]);

echo "<form action='gar-update-auto3.php' method='post'>";
foreach($autos as $auto)
{



    echo " autokenteken:" . $auto["autokenteken"];
    echo " <input type='hidden' name='autokentekenvak' ";
    echo " value= ' " . $auto ["autokenteken"] . "'";
    echo " > <br  />";

    echo " automerk: <input type='text' ";
    echo " name = 'automerkvak' ";
    echo " value = '" .$auto ["automerk"]. " '";
    echo " > <br  />";

    echo "autotype: <input type='text' ";
    echo "name = 'autotypevak' ";
    echo " value= ' " . $auto ["autotype"] . " ' ";
    echo " > <br   />";

    echo "autokmstand: <input type='text' ";
    echo "name = 'autokmstandvak' ";
    echo " value= ' " . $auto ["autokmstand"] . " ' ";
    echo " > <br   />";

    echo "klantid: <input type='text' ";
    echo "name = 'klantidvak' ";
    echo " value= ' " . $auto ["klantid"] . " ' ";
    echo " > <br   />";



}

echo "<input type='submit'>";
echo "</form>";

?>
    </body>
</html>
