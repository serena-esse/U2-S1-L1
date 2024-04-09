<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S1-L1</title>
</head>
<body>
<!--  ESERCIZIO 1 -->
<?php
// Impostare la timezone
date_default_timezone_set('Europe/Rome');

// Array con i nomi dei giorni della settimana in italiano
$giorni_settimana = array(
    "Domenica", "Lunedì", "Martedì", "Mercoledì", "Giovedì", "Venerdì", "Sabato"
);

// Array con i nomi dei mesi in italiano
$mesi = array(
    "gennaio", "febbraio", "marzo", "aprile", "maggio", "giugno",
    "luglio", "agosto", "settembre", "ottobre", "novembre", "dicembre"
);

// Ottenere la data di oggi
$data_oggi = getdate();

// Ottenere il giorno della settimana (0 per Domenica, 1 per Lunedì, ecc.)
$giorno_settimana_numero = $data_oggi['wday'];

// Ottenere il giorno del mese
$giorno = $data_oggi['mday'];

// Ottenere il mese
$mese = $data_oggi['mon'];

// Ottenere l'anno
$anno = $data_oggi['year'];

// Formattare la data in italiano
$data_in_italiano = $giorni_settimana[$giorno_settimana_numero] . ", " . $giorno . " " . $mesi[$mese - 1] . " " . $anno;

// Stampare la data
echo $data_in_italiano;
?>

ESERCIZIO 2 
<?php
// Array delle squadre di Serie A e relative formazioni
$squadre_serie_a = array(
    "Inter Milano" => array("Handanovic", "De Vrij", "Skriniar", "Bastoni", "Hakimi", "Barella", "Brozovic", "Eriksen", "Perisic", "Martinez", "Lukaku"),
    "Juventus" => array("Szczesny", "Danilo", "Bonucci", "Chiellini", "Alex Sandro", "Cuadrado", "Bentancur", "Arthur", "McKennie", "Dybala", "Ronaldo"),
    "Milan" => array("Donnarumma", "Calabria", "Kjaer", "Tomori", "Hernandez", "Kessie", "Bennacer", "Saelemaekers", "Calhanoglu", "Rebic", "Ibrahimovic"),
   
);

// Stampare i dati delle squadre e delle formazioni
foreach ($squadre_serie_a as $squadra => $formazione) {
    echo "Squadra: $squadra <br>";
    echo "Formazione: <br>";
    echo "<ul>";
    foreach ($formazione as $giocatore) {
        echo "<li>$giocatore</li>";
    }
    echo "</ul><br>";
}
?>

 ESERCIZIO 3  

<?php
// Array delle partite di Serie A con squadre e relative formazioni
$partite_serie_a = array(
    array(
        "squadra_casa" => "Inter Milano",
        "formazione_casa" => array("Handanovic", "De Vrij", "Skriniar", "Bastoni", "Hakimi", "Barella", "Brozovic", "Eriksen", "Perisic", "Martinez", "Lukaku"),
        "squadra_ospite" => "Juventus",
        "formazione_ospite" => array("Szczesny", "Danilo", "Bonucci", "Chiellini", "Alex Sandro", "Cuadrado", "Bentancur", "Arthur", "McKennie", "Dybala", "Ronaldo")
    ),
    array(
        "squadra_casa" => "Milan",
        "formazione_casa" => array("Donnarumma", "Calabria", "Kjaer", "Tomori", "Hernandez", "Kessie", "Bennacer", "Saelemaekers", "Calhanoglu", "Rebic", "Ibrahimovic"),
        "squadra_ospite" => "Napoli",
        "formazione_ospite" => array("Ospina", "Di Lorenzo", "Manolas", "Koulibaly", "Ghoulam", "Demme", "Bakayoko", "Politano", "Zielinski", "Insigne", "Osimhen")
    ),
    
);

// Stampare i dati delle partite e delle squadre
foreach ($partite_serie_a as $partita) {
    echo "Squadra di casa: {$partita['squadra_casa']} <br>";
    echo "Formazione di casa: <br>";
    echo "<ul>";
    foreach ($partita['formazione_casa'] as $giocatore_casa) {
        echo "<li>$giocatore_casa</li>";
    }
    echo "</ul>";

    echo "Squadra ospite: {$partita['squadra_ospite']} <br>";
    echo "Formazione ospite: <br>";
    echo "<ul>";
    foreach ($partita['formazione_ospite'] as $giocatore_ospite) {
        echo "<li>$giocatore_ospite</li>";
    }
    echo "</ul><br>";
}
?>


</body>
</html>