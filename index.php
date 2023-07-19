<?php

require __DIR__ . '/includes/functions.php';

if ($_GET['length']) {
    generate_password($_GET['length'], $_GET['multiple-characters']);
    header('Location: result.php');
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

        <form action="">
            <label for="length">Lunghezza password: </label>
            <input type="number" min="5" max="50" id="length" name="length"><br><br>

            <label for="multiple-characters">Consenti la ripetizione di caratteri: </label>
            <input type="checkbox" id="multiple-characters" name="multiple-characters"><br><br>

            <button type="submit">Genera</button>
        </form>
    </div>
</body>

</html>