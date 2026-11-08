<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
    <?php include_once('../includes/styles.php'); ?>
</head>

<body>
    <h1 class="blue">Intro to PHP</h1>
    <a href="/">Home</a>
    <?php
    // function add($x,$y):int|float{
    //     return $x + $y;
    // }
    // function add(int|float $X,int|float $Y):int|float{
    //     return $X + $Y;
    // } 
    /**
     * Adds two numbers together.
     * @param int|float $x value 1
     * @param int|float $y value 2
     * @return int|float the sum of the two numbers
     */
    function add($x, $y)
    {
        return $x + $y;
    }
    // $result = add(10, 20);
    
    function substruct($x, $y)
    {
        return $x - $y;
    }

    function multiply($x, $y)
    {
        return $x * $y;
    }

    function divide($x, $y)
    {
        if ($y == 0) {
            return "Error: Division by zero is not allowed.";
        }
        return $x / $y;
    }

    function modulo($x, $y)
    {
        if ($y == 0) {
            return "Error: Division by zero is not allowed.";
        }
        return $x % $y;
    }

    ?>
    <!-- <h1>Result: <?= $result ?></h1> -->
    <div>
        3+4=
        <?= add(3, 4) ?>
    </div>
    <div>
        6-5=
        <?= substruct(6, 5) ?>
    </div>
    <div>
        7*8=
        <?= multiply(7, 8) ?>
    </div>
    <div>
        10/2=
        <?= divide(10, 2) ?>
    </div>
    <div>
        9%4=
        <?= modulo(9, 4) ?>
    </div>
</body>

</html>