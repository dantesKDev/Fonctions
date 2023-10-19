<?php

function same($strA,$strB){

    if(mb_strlen($strA) == mb_strlen($strB)){
        for ($i=0; $i < mb_strlen($strA); $i++) { 
        // code...
            if($strA[$i] !== $strB[$i]){
                return false;
            }
        }return true;
    }else{
        return false;
    }
}

?>