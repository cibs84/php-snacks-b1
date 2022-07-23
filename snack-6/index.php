<!-- ## Snack 6
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-snacks-b1</title>

    <!-- Style CSS -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        li {
            list-style-type: none;

        }
        .list-item {
            border-bottom: 1px solid black;
            padding: 10px;
        }
    </style>

</head>
<body>
    
<?php
    $students = [
        [
            "name" => "Fabio",
            "lastname" => "Rossi",
            "grades" => [
                "matematica" => 7,
                "italiano" => 9,
                "inglese" => 5,
                "filosofia" => 6
            ]
        ],
        [
            "name" => "Andrea",
            "lastname" => "Bianchi",
            "grades" => [
                "matematica" => 5,
                "italiano" => 7,
                "inglese" => 8,
                "filosofia" => 7
            ]
        ],
        [
            "name" => "Eleonora",
            "lastname" => "Verdi",
            "grades" => [
                "matematica" => 8,
                "italiano" => 8,
                "inglese" => 5,
                "filosofia" => 7
            ]
        ],
        [
            "name" => "Sara",
            "lastname" => "Gialli",
            "grades" => [
                "matematica" => 6,
                "italiano" => 6,
                "inglese" => 5,
                "filosofia" => 5
            ]
        ],
        [
            "name" => "Nicola",
            "lastname" => "Fabbri",
            "grades" => [
                "matematica" => 7,
                "italiano" => 7,
                "inglese" => 6,
                "filosofia" => 5
            ]
        ]
    ];
    // Return a grades average from a gradesArray
    function calcGradesAverage($gradesArray){
        $sumGrades = 0;
        // From an associative $gradesArray, through array_keys() create an indexed array with the $gradesArray's keys as values
        $gradesArrayKeys = array_keys($gradesArray);

        for ($i=0; $i < count($gradesArray); $i++) { 
            $thisElement = $gradesArray["$gradesArrayKeys[$i]"];
            $sumGrades += $thisElement;
        }
        return $sumGrades / count($gradesArray);
    }
?>

<ul>
    <?php for ($i=0; $i < count($students); $i++) { 
            $thisStudent = $students[$i];
            $averageGrades = calcGradesAverage($thisStudent["grades"]); ?>

        <li class="list-item">
            <ul>
                <li>Nome: <?php echo $thisStudent["name"]; ?></li>
                <li>Cognome: <?php echo $thisStudent["lastname"]; ?></li>
                <li>Media Voti: <?php echo $averageGrades; ?></li>
            </ul>
        </li>

    <?php } ?>
</ul>
    
</body>
</html>