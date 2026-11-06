<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dates Types</title>
    <?php include_once('../includes/styles.php'); ?>
</head>

<body>
    <h1 class="blue">Dates Types</h1>
    <a href="index.php">Home</a>
    <?php
    date_default_timezone_set("America/Moncton");
    $now = time();//get the current epoch second,UNIX timestamp
    $date = strtotime("2026-10-4 14:35:05");//convert a date string to epoch second
    ?>
    <h1>Now Epoch Second:<?= $now ?> </h1>
    <h2>Now Formatted Date:<?= date('Y-m-d H:i:s', $now) ?> </h2>
    <h2>Epoch Second of our constructed date:<?= $date ?> </h2>
    <h2>Formatted Date:<?= date('Y-m-d H:i:s', $date) ?> </h2>
</body>

</html>