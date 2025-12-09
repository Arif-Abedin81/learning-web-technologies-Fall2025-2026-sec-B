<?php
    for ($i = 1; $i <= 3; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "* ";
        }

        $num = 1;
        for ($k = 1; $k <= 4 - $i; $k++) {
            echo $num . " ";
            $num++;
        }

        $char = chr(65 + $i - 1);
        for ($l = 1; $l <= $i; $l++) {
            echo $char . " ";
            $char++;
        }
        echo "<br>";
    }
?>
