<?php

require_once "db_connectie.php";

$db = maakVerbinding();

$query = "SELECT [name], price, type_id FROM Product";

$data = $db -> query($query);

$html_table = "<table>";
$html_table = $html_table . "<tr><th>Naam</th><th>price</th><th>type_id</th></tr>";

while($rij = $data -> fetch()) {
    $naam = $rij["name"];
    $prijs = $rij["price"];
    $type_id = $rij["type_id"];
    $html_table = $html_table . "<tr><td>$naam</td><td>$prijs</td><td>$type_id</td></tr>";
}

$html_table = $html_table . "</table>"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo($html_table);
    ?>
</body>
</html>