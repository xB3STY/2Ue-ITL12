<html>
<head>
</head>
<body>
<h1>Benzinkostenrechner</h1>

<!-- Formular für die Eingabe mit POST-Methode -->
<form method="post">
    <h2>POST Methode</h2>
    <label for="liter1">Liter 1:</label>
    <input type="text" id="liter1" name="liter1" value="40.5"><br><br>

    <label for="liter2">Liter 2:</label>
    <input type="text" id="liter2" name="liter2" value="35.7"><br><br>

    <label for="preis">Preis pro Liter:</label>
    <input type="text" id="preis" name="preis" value="1.499"><br><br>

    <input type="submit" value="Berechnen mit POST">
</form>

<!-- Formular für die Eingabe mit GET-Methode -->
<form method="get">
    <h2>GET Methode</h2>
    <label for="liter1_get">Liter 1:</label>
    <input type="text" id="liter1_get" name="liter1" value="40.5"><br><br>

    <label for="liter2_get">Liter 2:</label>
    <input type="text" id="liter2_get" name="liter2" value="35.7"><br><br>

    <label for="preis_get">Preis pro Liter:</label>
    <input type="text" id="preis_get" name="preis" value="1.499"><br><br>

    <input type="submit" value="Berechnen mit GET">
</form>

<?php

// Berechnung bei POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Werte aus dem Formular erhalten
    $preis = $_POST["preis"];
    $liter1 = $_POST["liter1"];
    $liter2 = $_POST["liter2"];

    // Berechnung der Gesamtliter und der Kosten
    $gesamtliter = $liter1 + $liter2;
    $kosten = $gesamtliter * $preis;

    // Ausgabe der Kosten
    echo "<h3>Ergebnis mit POST Methode:</h3>";
    echo "Die Benzinkosten betragen für " . $gesamtliter . " Liter: " . $kosten . " €<br>";
}

// Berechnung bei GET
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Werte aus dem Formular erhalten
    $preis = $_GET["preis"];
    $liter1 = $_GET["liter1"];
    $liter2 = $_GET["liter2"];

    // Berechnung der Gesamtliter und der Kosten
    $gesamtliter = $liter1 + $liter2;
    $kosten = $gesamtliter * $preis;

    // Ausgabe der Kosten
    echo "<h3>Ergebnis mit GET Methode:</h3>";
    echo "Die Benzinkosten betragen für " . $gesamtliter . " Liter: " . $kosten . " €<br>";
}

?>

</body>
</html>
