<?php

function getRandomString($length)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!$%&/()=?^+-_.,;:@#';
    $string = '';

    for ($i = 0; $i < $length; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $string .= $characters[$index];
    }

    return $string;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

    <title>Strong password generator</title>
</head>

<body>
    <div class="container">
        <h1>Strong Password Generator</h1>

        <?php if ($_GET['length']) : ?>
            <div class="alert">
                Password generata: <?= getRandomString($_GET['length']) ?>
            </div>
        <?php endif ?>

        <form action="">
            <label for="length">Lunghezza password: </label>
            <input type="number" min="5" max="100" id="length" name="length">

            <button type="submit">Genera</button>
        </form>
    </div>
</body>

</html>