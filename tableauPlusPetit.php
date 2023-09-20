<?php


############ PLUS PETIT TAB ###########
$tableau = array(101,7,16,400,15,6,7,25,10);
// var_dump($tableau);
var_dump(plusPetit($tableau));
function plusPetit($tab){ 
	// var_dump($tab);
        if($tab == null){
            echo "test";
            return null;
        }
        // return max($tab);
        $ch = count($tab)-1;
        $petit = $tab[0];
        $nbr = 0;
        
        for ($i=0; $i < count($tab); $i++) { 
            # code...
            if ($tab[$i] <= $tab[$ch]) {
                # code...
                $nbr = $tab[$i];
                if ($nbr <= $petit) {
                    # code...
                    $petit = $nbr;
                }
            }else{
                $nbr = $tab[$ch];
                if ($nbr <= $petit) {
                    # code...
                    $petit = $nbr;
                }
            }
            $ch--;
            echo $petit;
             
        }
        return $petit;
    }

?>