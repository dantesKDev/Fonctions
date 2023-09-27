<?php

$tab = [];
for ($z = 0; $z < 10; $z++) {
    for ($a = 0; $a < 10; $a++) {
        $tab[$z][$a] = rand(-50, 50);
    }
}

var_dump($tab);

echo "<br>";

$neg = 0;
$null = 0;
$pos = 0;
foreach ($tab as $cle => $val) {
    foreach ($val as $cle => $nbr) {
        echo "<br> <br>";
        var_dump($nbr);
        switch ($nbr) {
            case $nbr < 0:
                # code...
                $neg++;
                break;
            case $nbr == 0:
                # code...
                $null++;
                break;

            default:
                # code...
                $pos++;
                break;
        }
    }
}
echo "Nbr negative : $neg <br> Nbr null : $null<br> Nbr positive : $pos";

?>