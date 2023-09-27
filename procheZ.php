<?php
$tab = array(-10, 28, -9, -15, -8);


echo tempProchedeO($tab);

function tempProchedeO($tab)
{
    if (!$tab) {
        return false;
    }

    $list = [];
    for ($i = 0; $i < count($tab); $i++) {
        # code...
        if ($tab[$i] < 0) {
            $list[] .= - ($tab[$i]);
        } else {
            $list[] .= $tab[$i];
        }
    }
    var_dump($list);
    $min = min($list);
    echo $min;
    $nbr = 0;
    for ($z = 0; $z < count($tab); $z++) {
        # code...
        if ($tab[$z] < 0) {
            if ($tab[$z] == -$min) {
                # code...
                $nbr = $tab[$z];
            }
        } else if ($tab[$z] == $min) {
            $nbr = $tab[$z];
        }
    }

    return $nbr;
}

?>