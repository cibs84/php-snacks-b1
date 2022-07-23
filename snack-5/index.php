<!-- ## Snack 5
Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-snacks-b1</title>

    <!-- Style CSS -->
    <style>
        div {
            width: 200px;
            display: inline-block;
        }
        .teachers {
            border: 5px solid gray;
            padding: 15px;
        }
        .pm {
            border: 5px solid green;
            padding: 15px;
        }
    </style>

</head>
<body>
    
<?php
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
?>

<!-- Teachers -->
<div class="teachers">
    <?php for ($i=0; $i < count($db["teachers"]); $i++) { 
        $thisTeacher = $db["teachers"][$i]; ?>

        <div><?php echo $thisTeacher["name"] . " " . $thisTeacher["lastname"]; ?></div>
        
    <?php } ?>
</div>

<!-- PM -->
<div class="pm">
    <?php for ($i=0; $i < count($db["pm"]); $i++) { 
        $thisPm = $db["pm"][$i]; ?>

        <div><?php echo $thisPm["name"] . " " . $thisPm["lastname"]; ?></div>
        
    <?php } ?>
</div>
    
</body>
</html>