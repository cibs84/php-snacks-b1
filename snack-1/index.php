<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-snacks-b1</title>
</head>
<body>
    
<?php
$matches = [
    [
        "homeTeam" => "Olimpia Milano",
        "awayTeam" => "Dinamo Sassari",
        "homeTeamScore" => 75,
        "awayTeamScore" => 60
    ],
    [
        "homeTeam" => "Universo Treviso",
        "awayTeam" => "Venezia",
        "homeTeamScore" => 100,
        "awayTeamScore" => 105
    ],
    [
        "homeTeam" => "Trieste",
        "awayTeam" => "Brindisi",
        "homeTeamScore" => 77,
        "awayTeamScore" => 79
    ],
    [
        "homeTeam" => "Virtus Bologna",
        "awayTeam" => "Trento",
        "homeTeamScore" => 91,
        "awayTeamScore" => 72
    ],
    [
        "homeTeam" => "Cantù",
        "awayTeam" => "Reggiana",
        "homeTeamScore" => 106,
        "awayTeamScore" => 101
    ],
    [
        "homeTeam" => "Cremona",
        "awayTeam" => "Brescia",
        "homeTeamScore" => 89,
        "awayTeamScore" => 94
    ]
]
?>


<ul>
    <!-- Ciclo for per stampare gli elementi della lista -->
    <?php
    for ($i=0; $i < count($matches); $i++) { 
        $thisMatch = $matches[$i];
    ?>

    <li><?php echo $thisMatch["homeTeam"]; ?> - <?php echo $thisMatch["awayTeam"]; ?> | <?php echo $thisMatch["homeTeamScore"]; ?>-<?php echo $thisMatch["awayTeamScore"]; ?></li>

    <?php } ?>
</ul>




</body>
</html>