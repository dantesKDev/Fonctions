<?php

function tabPrZero($tab){
    
    if (!$tab) {
        return false;
    }

    $pr = abs($tab[0]);

    for ($i=0; $i < count($tab); $i++) { 
        // code...
        if($tab[$i] < 0){
            if (abs($tab[$i]) < abs($pr)) {
                // code...
                $pr = $tab[$i];
            }
            
        }else if($tab[$i] < abs($pr)){
            $pr = $tab[$i];
        }
    }return $pr;

}

?>