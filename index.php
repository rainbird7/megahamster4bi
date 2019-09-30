<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
    require ("classes/room.php");
    $rooms[]=new room(49, "The Room");
    $rooms[]=new room(149, "The Flat");
    $rooms[]=new room(69, "The Pit");

?>

    <table>
        <tr>
            <th>Produkt</th>
            <th>Preis</th>
        </tr>

        <?php
        foreach ($rooms as $room) {
            echo <<<END
                <tr>
                    <td>{room->getName()}</td>
                    <td>{room->getPreis()}</td>
                </tr>
END;
        }
        ?>


<tr>
    <td>The Room</td>
    <td>49€</td>
</tr>
<tr>
    <td>The Flat</td>
    <td>149€</td>
</tr>
<tr>
    <td>The Pit</td>
    <td>69€</td>
</tr>
</table>
</body>
</html>