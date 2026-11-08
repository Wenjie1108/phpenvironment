<?php include_once "../public/student.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
    <?php include_once('../includes/styles.php'); ?>
</head>

<body>
    <h1>OOP</h1>
    <a href="index.php">Home</a>
    <div>
        <?php
        $student1 = new Student("John", "Doe");
        echo $student1->firstName;
        echo $student1->lastName = "David";
        echo "<br>";
        echo $student1->getFullName();

        $student2 = new Student("Roman", "Pelhik");
        $student3 = new Student("Gilles", "Robichaud");
        $student4 = new Student("Linda", "Moore");

        $students = [$student1, $student2, $student3, $student4];
        foreach ($students as $student) {
            echo $student->getFullName();
            echo "<br>";
        }
        array_push($students, new Student("John", "Smith"));
        foreach ($students as $student) {
            echo $student->getFullName();
            echo "<br>";
        }

        $student5 = new Student("Annie", "Smith");
        array_push($students, $student5);
        ?>
        <ol>
            <!-- count($students) 是用来取得 $students 数组里有多少个元素，作为 for 循环的结束条件。 -->
            <?php for ($i = 0; $i < count($students); $i++) {
                echo "<li>" . $students[$i]->getFullName() . "</li>";
            }
            ?>
        </ol>
        <ul>
            //for each the collection of students is first then the interative
            <?php foreach ($students as $s) {
                echo "<li>" . $s->getFullName() . "</li>";
            }
            ?>
        </ul>
    </div>
</body>

</html>