<?php
    $num1 = 15;
    $num2 = 22;
    $num3 = 10;

    if ($num1 >= $num2 && $num1 >= $num3) {
        echo "<p>The largest number is " . $num1 . ".</p>";
    } elseif ($num2 >= $num1 && $num2 >= $num3) {
        echo "<p>The largest number is " . $num2 . ".</p>";
    } else {
        echo "<p>The largest number is " . $num3 . ".</p>";
    }
?>
