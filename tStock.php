<?php
//La fonction doit retourner un tableau contenant les noms des trois actions ayant la valeur moyenne la plus elevee. 
//Le tableau doit trie par valeur moyenne décroissante. Chaque action aura une valeur moyenne
$stocks = ['AMZN', 'CACC', 'EQIX', 'GOOG'];
$prices = [[12.81, 11.09, 12.11, 10.93,15], [10.34, 10.56, 10.14, 12.17],[14.5,16.3,14.3,10.7],[9.83, 8.14, 13.1,10.50]];

var_dump(tStock($stocks,$prices));

function tStock($stocks,$prices){
    $moyTab = [];
    $moy = 0;
    
    for ($i=0; $i < count($prices); $i++) { 
        // code...
        $calc = 0;
        for ($x=0; $x < count($prices[$i]); $x++) { 
            // code...
            $calc += $prices[$i][$x];
            if($x == count($prices[$i])-1){
                $moyTab[$stocks[$moy]] = array($calc/(count($prices[$i])));
                $moy++;
            }
        }
        
    }array_multisort($moyTab);
    return $moyTab;

}


?>