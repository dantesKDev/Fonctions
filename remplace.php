<?php

$str = "Salut";
$a = "a";
$b = "0";
echo $str[0];
echo tableauRemplace($str,$a,$b);

function tableauRemplace($str,$a,$b){
    // $z=0;
    //mb_strlen(), compte le nbr de caract et non d'octet comme strlen()
    for ($i=0; $i < mb_strlen($str); $i++) {
        # code...
        if ($str[$i] == $a) {
            $str[$i] = $b;
        }
    }
    return $str;

    // while($str[$z] != '\0') {
    //     # code...
    //     echo $str[$z];
    //     if ($str[$z] == $a) {
    //         $str[$z] = $b;
    //     }
    //     $z++;
    // }
}


?>