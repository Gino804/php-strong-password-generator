<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

    <title>Password generata</title>
</head>

<body>
    <div class="container">
        <h1>Password generata</h1>
        <div class="alert">
            Password generata: <?= $_SESSION['password'] ?>
        </div>
    </div>
</body>

</html>