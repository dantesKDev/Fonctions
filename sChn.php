<?php


function sChn($str, $chD, $chF){

    $sch = "";
    $nbr = 0;

    for ($i=0; $i < mb_strlen($str); $i++) {
        # code...
        if (($i+1) >= $chD && $nbr <= $chF) {
            # code...
            $sch .= $str[$i]; 
        }$nbr++;
    }return $sch;
}

?>