<?php
    // ini_set('display_errors', 1);
    // ini_set('display_startup_errors', 1);
    // error_reporting(E_ALL);

    $char = 'abcdefghijklmnopqrstuvwxyz';
    $myPass = '';
    $uppercase = "0";
    $numbers =  "0";
    $symbols = "0";
    $inputLength = "0";


    if (isset($_GET['length'])) {
        $inputLength = $_GET['length'];
        $uppercase = isset($_GET['uppercase']);
        $numbers = isset($_GET['numbers']);
        $symbols = isset($_GET['symbols']);
    }


    if ($uppercase) {
        $char .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    }
    if ($numbers) {
        $char .= '0123456789';
    }
    if ($symbols) {
        $char .= '!@#$%^&*()_-+={}[]\|:;"<>,.?/~`';
    }

    $charLength = strlen($char);



    for ($i = 0; $i < $inputLength; $i++) {
        $randomIndex = random_int(0, $charLength - 1);
        $myPass .= $char[$randomIndex];
    }

    ?>