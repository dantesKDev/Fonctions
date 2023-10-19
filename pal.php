<?php

function pal($str){
	$max = strlen($str)-1;
	
	for ($i=0; $i < mb_strlen($str); $i++) { 
		// code...
		if($str[$i] !== $str[$max]){
			return false;
		}$max--;
	}return true;
}

?>