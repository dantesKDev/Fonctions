<?php


$str1 = "Bonjour mande!";
$str2 = "Bonjour monde!";

$ch1 = [];
$ch2 = [];

for($z=0; $z < mb_strlen($str1); $z++){
    $ch1[] .= $str1[$z];
}
for($y=0; $y < mb_strlen($str2); $y++){
    $ch2[] .= $str2[$y];
}


$dif = [];
if(count($ch1) == count($ch2)){
    for ($i=0; $i < count($ch1); $i++) { 
        # code...
        if($ch1[$i] != $ch2[$i]){
            $dif[] .= $ch1[$i];
        }
    }
}else {
    # code...
    for ($x=0; $x < count($ch2); $x++) {
        # code...
        if ($ch2[$x] != $ch1[$x]) {
        }
    }
}

(count($dif) != 0) ? (print_r("Chaine differentes")) : print_r("Chaine identique");
echo "<br>Voir les diff ".count($dif).": <br>";
for($a=0; $a < count($dif); $a++){
    echo "$dif[$a]";
}

?>