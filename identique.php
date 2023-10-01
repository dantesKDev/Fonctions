<?php


$str1 = "Bonjour monde!";
$str2 = "Bonjour monde!";

$ch1 = [];
$ch2 = [];

for($z=0; $z < mb_strlen($str1); $z++){
    $ch1[] .= $str1[$z];
}
for($y=0; $y < mb_strlen($str1); $y++){
    $ch2[] .= $str2[$y];
}

$nbr = 0;
if(count($ch1) >= count($ch2)){
    for ($i=0; $i < count($ch1); $i++) { 
        # code...
        if($ch1 != $ch2){
            $nbr++;
        }
    }
}else {
    # code...
    for ($x=0; $x < count($ch2); $x++) {
        # code...
        if ($ch2 != $ch1) {
            $nbr++;
        }
    }
}

if($nbr){
    echo "Chaine differentes";
}else{
    echo "Chaine identique";
}



?>