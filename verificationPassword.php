<?php

echo verificationPassword('ResetTest123');

function verificationPassword($str){
    $strTab = str_split($str);
    // var_dump($strTab);
    $nbrN = 0;
    $nbrMaj = 0;
    $nbrMin = 0;
    for($i = 0; $i < count($strTab); $i++){
        if(preg_match('/[A-Z]/', $strTab[$i])){
            $nbrMaj++;
        }
        if(preg_match('/[a-z]/', $strTab[$i])){
            $nbrMin++;
        }
        if (preg_match('/[0-9]/', $strTab[$i])) {
            $nbrN++;
        }
    }
    // echo $nbrN;
    // echo $nbrMaj;
    // echo $nbrMin;
    if(count($strTab) >= 8 && $nbrN >= 1 && $nbrMaj >= 1 && $nbrMin >= 1){
        return true;
    }else{
        return false;
    }
}

?>