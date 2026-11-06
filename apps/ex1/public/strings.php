<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
    <?php include_once('../includes/styles.php'); ?>
    <!-- <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
        }

        .green {
            color: green;
        }

        .blue {
            color: blue;
        }

        div {
            padding: 10px;
        }
    </style> -->
</head>

<body>
    <h1>Strings</h1>
    <a href="index.php">Home</a>
    <?php
    $name = "WenjieMa";
    $campus = "Moncton";
    $course = "Software Development";
    $message = "My name is " . $name . ". I am studying at " . $campus . " in the course of " . $course . ".";
    $messageStringInterpolation = "My name is $name. I am studying at $campus and I am studying in the course of $course.";

    ?>
    <h1>Using Strings Concatenation with dot operator</h1>
    <h2 class="green"><?php echo $message; ?></h2>

    <h1>Using String Interpolation</h1>
    <h2 class="blue"><?= $messageStringInterpolation; ?></h2>
</body>

</html>