<?php

echo ("<h1 style=\"text-align:center;\">My PHP Development Environment</h1>");
echo "<h2>My name is Wenjie </h2>";

phpinfo();

try {
    if ($msrp <= 0) {
        throw new InvalidArgumentException("MSRP MUST BE GREATER THAN ZERO");
    }
    echo "Vliad MSRP";
} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
} finally {
    echo "Cleanup operations.";
}

?>