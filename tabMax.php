<?php

function tabMax($tab){

    if($tab == null){
        return null;
    }

    $max = $tab[0];

    for ($i=0; $i < count($tab); $i++) { 
        // code...
        if($tab[$i] >= $max) {
            // code...
            $max = $tab[$i];
        }
    }return $max;
}

?>