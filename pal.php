<?php

$str ="kayak";

var_dump(pal($str));

function pal($str){
	$max = strlen($str)-1;
	
	for ($i=0; $i < strlen($str); $i++) { 
		// code...
		if($str[$i] !== $str[$max]){
			return false;
		}$max--;
	}return true;
}

?>