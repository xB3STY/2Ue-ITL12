<html>
<head></head>
<body>

<h1>Benzinkostenrechner</h1>

<!-- Formular für die Eingabe -->
<form method="post">
    <label for="liter1">Liter 1:</label>
    <input type="text" id="liter1" name="liter1" value="40.5"><br><br>

    <label for="liter2">Liter 2:</label>
    <input type="text" id="liter2" name="liter2" value="35.7"><br><br>

    <label for="preis">Preis pro Liter:</label>
    <input type="text" id="preis" name="preis" value="1.499"><br><br>

    <input type="submit" value="Berechnen">
</form>

<?php
// Überprüfe ob POST-Daten vorhanden sind
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //Holt die Post daten
    $preis = $_POST["preis"];
    $liter1 = $_POST["liter1"];
    $liter2 = $_POST["liter2"];

    // Berechnung der Gesamtmenge an Litern
    $gesamtliter = $liter1 + $liter2;

    // Berechnung der Kosten
    $kosten = $gesamtliter * $preis;

    // Ausgabe des Ergebnisses
    echo "Die Benzinkosten betragen für " . $gesamtliter . " Liter: " . $kosten . " €";
}
?>
</body>
</html>
