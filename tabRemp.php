<?php

function tabRemp($str,$a,$b){
    
    for ($i=0; $i < mb_strlen($str); $i++) {
        # code...
        if ($str[$i] == $a) {
            $str[$i] = $b;
        }
    }
    return $str;
}


?>