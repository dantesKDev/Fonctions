<?php

$tabA = [1,2,3,7,8,9];
$tabB = [4,5,6];

$val = 2;
$tabN = [];
for($z=0; $z < count($tabA);$z++){
    if($z == $val+1){
        for ($i=0; $i < count($tabB); $i++) {
            # code...
            $tabN[] .= $tabB[$i];
        }
    }
    $tabN[] .= $tabA[$z];
}

var_dump($tabN);

?>