<?php
/*
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60
*/

$matchBasket = [
    ["home" => "Olimpia Milano", "out" => "Cantù", "pointsHome" => rand(1, 100), "pointsOut" => rand(1, 100)],
    ["home" => "Genova", "out" => "Bari", "pointsHome" => rand(1, 100), "pointsOut" => rand(1, 100)],
    ["home" => "Torino", "out" => "Lecce", "pointsHome" => rand(1, 100), "pointsOut" => rand(1, 100)]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snaks</title>
</head>

<body>
    <h5>
        <?php
        foreach ($matchBasket as $match) { // oppure utilizzare : 
        ?>

            <span>
                <?php
                echo $match["home"] . " - " . $match["out"] . " | " . $match["pointsHome"] . "-" . $match["pointsOut"] . "<br>";
                ?>
            </span>

        <?php }; // endforEach 
        ?>
    </h5>
</body>

</html>