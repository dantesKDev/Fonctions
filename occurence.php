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
var_dump($res);

?>