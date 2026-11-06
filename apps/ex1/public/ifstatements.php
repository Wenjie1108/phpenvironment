<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Statements</title>
    <?php include_once('../includes/styles.php'); ?>
</head>

<body>
    <h1>if Statements</h1>
    <a href="index.php">Home</a>
    <?php
    $x = 10;
    $y = 5;
    if ($x > $y) {
        echo "<div>x is greater than y</div>";
    } else if ($x < $y) {
        echo "<div>x is less than y</div>";
    } else {
        echo "<div>x is equal to y</div>";
    }

    //cant use $z=$_GET["value"]; ,then if($z)
    if (isset($_GET["value"])) {
        $z = $_GET["value"];//read a query string parameter called value from the URL
        if (is_numeric($z)) {
            if ($z > $y && $z > $y) {
                echo "<div>Value is greater than x and y</div>";
            } else if ($z < $x && $z < $y) {
                echo "<div>Value is less than x and y</div>";
            } else {
                echo "<div>Value is between x and y</div>";
            }
            // echo "<div>Value: " . $z . "</div>";
        } else {
            echo "<div>The value query string param is not a number.</div>";
        }
    } else {
        echo "<div>The value query string param was not set.</div>";
    }
    ?>
</body>

</html>