<!-- ## Snack 4
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->


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
    $paragraph = "Ho sempre amato stare nell'oceano. Da bambino nuotavo prima di camminare. Mio padre era un Navy Seal e mi portava a fare bodysurf, sulla schiena di lui, vicino a casa nostra a Kailua, Hawaii, dove ora vivo di nuovo, a un isolato dall'acqua.

    Quando stavo crescendo negli anni '80, il surf era considerato un'attività da ragazzi. Ero geloso di loro con le loro tavole da boogie e da surf. Quando avevo 12 anni, un amico di famiglia mi diede la sua tavola. Per quanto ne so, sono stata la prima ragazza da questa parte dell'isola a fare surf. È stato glorioso, anche se le persone spesso mi dicevano che non ero là fuori.

    Sono andato all'università in California e lì ho fatto surf. Desiderando l'avventura, ho comprato un camion e ho iniziato a guidare verso sud, stabilendomi in Costa Rica, dove ho avviato un campo di surf femminile. Un decennio dopo, sono tornato alle Hawaii per un master in linguistica e per lavorare come massaggiatore e personal trainer, e per continuare a fare surf, cosa che mi ha portato in Messico, Figi, Tahiti, Australia, Nuova Zelanda e Indonesia.

    Un giorno, nel dicembre 2021, sono andato all'alba alla spiaggia di Mokulē'ia, sulla costa settentrionale di Oahu. Ho scelto un posto per fare surf e sono sceso a riva con un amico. È stata una bellissima mattinata. Il sole era fuori e le onde non erano più grandi di due piedi. Abbiamo remato; lui è andato a destra e io ho girato a sinistra. Le persone più vicine erano a 200 metri di distanza.";

    $paragraphExploded = explode(".", $paragraph);
?>
<!-- Paragrafo Iniziale -->
<h2>Paragrafo Iniziale</h2>
<p><?php echo $paragraph; ?>.</p>

<!-- Paragrafo Suddiviso -->
<h2>Paragrafo Suddiviso</h2>

<?php for($i = 0; $i < count($paragraphExploded); $i++) {
        $thisSentence = $paragraphExploded[$i];
        $thisSentence = trim($thisSentence, " \n\r\t\v\x00"); 
        str_replace(array('.', ' ', "\n", "\t", "\r", "\&#13;", "\&#10;"), '', $thisSentence); 
?>
    
    <p><?php echo $thisSentence; ?>.</p>
    
<?php } ?>
    
</body>
</html>