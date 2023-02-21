<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Generator</title>
</head>


<body>
    <h1>A Strong Password Generator</h1>

    <?php
    include  __DIR__ . '/function.php';
    ?>

    <form method="get">
        <label for="length">Lunghezza della password:</label>
        <input type="number" id="length" name="length" min="4" max="20" value="4" required>
        <br>
        <input type="checkbox" id="uppercase" name="uppercase" value="1">
        <label for="uppercase">Includi lettere maiuscole</label>
        <br>
        <input type="checkbox" id="numbers" name="numbers" value="1">
        <label for="numbers">Includi numeri</label>
        <br>
        <input type="checkbox" id="symbols" name="symbols" value="1">
        <label for="symbols">Includi simboli</label>
        <br><br>
        <input type="submit" value="Genera password">
    </form>


</body>


<?php


echo $myPass;

?>

</body>

</html>