<?php

$tab = ['look', 'bag', 'loop', 'look','back'];
$res = [];
for ($i=0; $i < count($tab); $i++) { 
    # code...
    $nbr =0;
    $val = $tab[$i];
    for ($z=0; $z < count($tab); $z++) { 
        # code...
        if($val == $tab[$z]){
            $nbr++;
        }
        
    }
    $res[] .= $nbr;
}

for ($i = 0; $i < count($tab); $i++) {
    # code...
    $val = $tab[$i];
    for ($z = 0; $z < count($tab); $z++) {
        # code...
        if ($val == $tab[$z]) {
            unset($tab[$z]);
            continue;
        }
    }
}
var_dump($res);
echo "<br>";
echo var_dump(array_count_values($tab));

?>