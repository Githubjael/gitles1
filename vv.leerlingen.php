<?php
require_once 'config.php';
$result = mysqli_query($mysqli, "SELECT * FROM `Presenties`");

if(mysqli_num_rows($result) > 0)
    {
        echo '<table>';
        while($row = mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<tr>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>leerling gegevens</title>
    </head>
    <body>
        <h1>
            <img src="./headerimg.png" alt="header">
            <span>leerling gegevens</span>
            <span id="Naam"></span>
        </h1>
        <!-- <div id="wrapper">
            <div id="dagrooster"></div>
        </div> -->
    </body>
</html>