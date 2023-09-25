<?php

// $chD = 17;
// $chF = 19; 
// $str = "Adios Amigos Mi Amor";

// echo sousChaine($str, $chD, $chF);

function sousChaine($str, $chD, $chF){
    $sch = "";
    $nbr = 0;
    for ($i=0; $i < mb_strlen($str); $i++) {
        # code...
        if (($i+1) >= $chD && $nbr <= $chF) {
            # code...
            $sch .= $str[$i]; 
        }
        $nbr++;
    }
    return $sch;
}

?>