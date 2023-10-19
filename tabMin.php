<?php

function tabMin($tab){

    if($tab == null){
        return null;
    }

    $min = $tab[0];

    for ($i=0; $i < count($tab); $i++) { 
        // code...
        if($tab[$i] <= $min) {
            // code...
            $min = $tab[$i];
        }
    }return $min;
}

?>