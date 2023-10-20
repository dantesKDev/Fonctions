<?php

function tabNegPosNull($tab){

    $neg = 0;
    $null = 0;
    $pos = 0;

    foreach ($tab as $cle => $val) {

        foreach ($val as $cle => $nbr) {

            switch ($nbr) {
                case $nbr < 0:
                    # code...
                    $neg++;
                    break;
                case $nbr == 0:
                    # code...
                    $null++;
                    break;

                default:
                    # code...
                    $pos++;
                    break;
            }
        }
    }
    return $ch = "Nbr negative : $neg <br> Nbr null : $null<br> Nbr positive : $pos";
}



?>