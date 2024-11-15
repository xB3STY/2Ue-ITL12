<html>
<head></head>
<body>
<h1>Benzinkostenrechner</h1>
<?php

//1. Teil die Kostenermittlung
$liter1 = 40.5;
$liter2 = 35.7;
$gesamtliter = $liter1 + $liter2;
//gleiche Literpreis von 1 und 2
$preis = 1.499;

//2. Teil Ergebnisanzeige
echo "Die Benzinkosten betragen für "
     . $gesamtliter . " Liter: " . $gesamtliter * $preis ." €" ;
?>
</body>
</html>
