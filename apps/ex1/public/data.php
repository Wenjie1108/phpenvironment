<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Types</title>
    <?php include_once('../includes/styles.php'); ?>
</head>

<body>
    <h1 class="blue">Data Types</h1>
    <a href="index.php">Home</a>
    <?php
    $now = time();//get the current epoch second
    
    ?>
    <h1>Epoch Second:<?= $now ?> </h1>
    <h2>Formatted Date:<?= date('Y-m-d H:i:s', $now) ?> </h2>
</body>

</html>