<?php

session_start();        

//Inizializzo tutte le variabili
$char = 'abcdefghijklmnopqrstuvwxyz';
$myPass = '';
$uppercase = "0";
$numbers =  "0";
$symbols = "0";
$inputLength = "0";

//Verifico se è impostato il filtro con isset e lo riempio il valore del form GET
if (isset($_GET['length'])) {
    $inputLength = $_GET['length'];
    $uppercase = isset($_GET['uppercase']);
    $numbers = isset($_GET['numbers']);
    $symbols = isset($_GET['symbols']);
    $egualChar = isset($_GET['egualChar']);
}

//Verifico le condizioni delle chechbox e se sono verificate aggiungo elementi alla stringa dei caratteri da utilizzare per creare la nostra password
if ($uppercase) {
    $char .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
}
if ($numbers) {
    $char .= '0123456789';
}
if ($symbols) {
    $char .= '!@#$%^&*()_-+={}[]\|:;"<>,.?/~`';
}

//Ora leggo la quantità di caratteri da utilizzare
$charLength = strlen($char);

//Ciclo for che in base alla lunghezza di input scelta ci da la nostra password
for ($i = 0; $i < $inputLength; $i++) {
    $randomIndex = random_int(0, $charLength - 1);
    $myPass .= $char[$randomIndex];
}

//Ciclo if che permette di eliminare i doppioni all'interno di una stringa
if ($egualChar) {
    $result = '';
    for ($i = 0; $i < strlen($myPass); $i++) {
        if (strpos($result, $myPass[$i]) === false) {
            $result .= $myPass[$i];
        }
    }
    $myPass = $result;
}
