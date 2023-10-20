<?php

function tabConcat($tabA,$tabB,$val){
    
    $tabN = [];

    for($z=0; $z < count($tabA);$z++){
        if($z == $val){
            for ($i=0; $i < count($tabB); $i++) {
                # code...
                $tabN[] .= $tabB[$i];
            }
        }
        $tabN[] .= $tabA[$z];
    }
    return $tabN;
}

?>