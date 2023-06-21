<?php
    $size = 5;
    for($i = 0; $i < $size; $i++) {
        for($j = 1; $j < $size - $i; $j++) {
            echo " ";
        }
        for($k = 0; $k <= $i; $k++) {
            echo "O";
        }
        echo "\n";
    }
?>
