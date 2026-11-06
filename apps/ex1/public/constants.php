<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constants</title>
    <?php include "../includes/styles.php"; ?>
    <!-- <?php include_once "../includes/styles.php"; ?> -->
</head>

<body>
    <h1>Constants</h1>
    <a href="/">Home</a>
    <div>
        <?php
        define("COLLEGE", "NBCC");
        define("CAMPUS", "Moncton");
        // define("Campus","Fredericton"); we can not redefine a constant, it will throw an error
        define("MARGIN", 0.05);

        const TAX_RATE = 0.15;
        const MAX_STUDENTS = 30;//constants slao not be redefined, it will throw an error
        const ADDRESS = "1234 Moutain Road";

        ?>
        <h1>Im studing at <?= CAMPUS ?> in <?= COLLEGE ?> </h1>
        <div>
            <h2>Tax Rate: <?= TAX_RATE ?></h2>
            <h2>Max Students: <?= MAX_STUDENTS ?></h2>
            <h2>Margin: <?= MARGIN ?></h2>
            <h2>Address: <?= ADDRESS ?></h2>
        </div>
    </div>
</body>

</html>