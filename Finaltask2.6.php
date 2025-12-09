<?php
    $arr = [12, 35, 7, 56, 23, 19, 44];
    $searchElement = 23;
    if (in_array($searchElement, $arr)) {
        echo "<p>The element " . $searchElement . " was found in the array.</p>";
    } else {
        echo "<p>The element " . $searchElement . " was not found in the array.</p>";
    }
?>
