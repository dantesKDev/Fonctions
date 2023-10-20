<?php

//Occurence et sup doublons : array.

function tabOcc($tab){
   
   for ($i=0; $i < count($tab); $i++) { 
        // code...
        $num = 1;
        $resTab[$i] = $tab[$i];

        for ($z=0; $z < count($tab); $z++) { 
            // code...
            if ($tab[$z] == $tab[$i]) {
            // code...
                $resTab[$tab[$i]] = array($num++);

                if($num > 1){
                    unset($resTab[$z]);
                }
            }
        }
        
    }return $resTab;
}


?>