<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Strong Password Generator</title>
</head>


<body>

    <h1>A Strong Password Generator</h1>

    <div class="login">
        <?php
        include  __DIR__ . '/function.php';
        ?>




    </div>


    <div class="container">




        <form method="get">
            <label for="length">Lunghezza della password:</label>
            <input type="number" id="length" name="length" min="4" max="20" required>
            <br>
            <input type="checkbox" id="uppercase" name="uppercase" value="1">
            <label for="uppercase">Includi lettere maiuscole</label>
            <br>
            <input type="checkbox" id="numbers" name="numbers" value="1">
            <label for="numbers">Includi numeri</label>
            <br>
            <input type="checkbox" id="symbols" name="symbols" value="1">
            <label for="symbols">Includi simboli</label>
            <br>
            <input type="checkbox" id="egualChar" name="egualChar" value="1">
            <label for="egualChar">Evita caratteri uguali</label>
            <br>
            <input type="submit" class="button btn" value="Genera password">
            <button class="btn">
                <a href="./">Reset</a>
            </button>
        </form>

        <?php

        if (isset($_SESSION["user"])) {
            echo "<div class=\"password\"> $myPass </div>";
            echo "<br><br>";

            echo "<button>
    <a href=\"./logout.php\">Logout</a>
    </button>";
        } else {
            echo "<button class=\"btn\">
    <a href=\"login.php\">Login per visualizzare la password</a>
    </button>";
        }
        ?>


    </div>


</body>



</body>

</html>