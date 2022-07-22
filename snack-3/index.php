<!-- ## Snack 3
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

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
$numbers = [];
$i = 0;
?>

<ul>
    <!-- Ciclo finchè l'array numbers non arriva a 15 numeri/elementi -->
    <?php while(count($numbers) < 15) { ?>
        <!-- Genero Numero random -->
        <?php $rndNumber = rand(1, 100); ?>
        <!-- Se il numero non è presente nell'array ce lo inserisco in modo da evitare doppioni -->
        <?php if(!in_array($rndNumber, $numbers)) { ?>
                <?php $numbers[] = $rndNumber; ?>
                <li><?php echo $numbers[$i]; ?></li>
                <?php $i++; ?>
        <?php } ?>
    <?php } ?>
</ul>

</body>
</html>