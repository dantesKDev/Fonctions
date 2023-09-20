<?php

############ PLUS GRAND TAB ###########
$tableau = array(101,7,16,400,15,6,7,25,10);
// var_dump($tableau);
var_dump(plusGrand($tableau));
function plusGrand($tab){ 
	// var_dump($tab);
        if($tab == null){
            echo "test";
            return null;
        }
        // return max($tab);
        $ch = count($tab)-1;
        $grand = 0;
        $nbr1 = 0;
        
        for ($i=0; $i < count($tab); $i++) { 
            # code...
            if ($tab[$i] >= $tab[$ch]) {
                # code...
                $nbr1 = $tab[$i];
                if ($nbr1 >= $grand) {
                    # code...
                    $grand = $nbr1;
                }
            }else{
                $nbr1 = $tab[$ch];
                if ($nbr1 >= $grand) {
                    # code...
                    $grand = $nbr1;
                }
            }
            $ch--;
            echo $grand;
             
        }
        return $grand;
    }

?>