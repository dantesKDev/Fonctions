<?php

function tabMul(){
    echo "<table style='border: 1px solid black'>";
    echo "<tr>";
    echo "<td style='border: 1px solid black'>x</td>";
    for ($z = 1; $z < 11; $z++) {
        # code...
        echo "<td style='border: 1px solid black'>$z</td>";
    }
    echo "</tr>";
    for ($y = 1; $y < 11; $y++) {
        echo "<tr>";

        for ($x = 0; $x < 11; $x++) {
            if ($x == 0) {
                echo "<td style='border: 1px solid black'>$y</td>";
            } else {
                echo "<td style='border: 1px solid black'>" . $x * $y . "</td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
}

?>