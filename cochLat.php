<?php 

// Première consonne uniq
$str = "signe";

var_dump(cochLat($str));

function cochLat($str){

	for ($i=0; $i < mb_strlen($str); $i++) { 
		// code...
		if(!preg_match("/[aAeEiIoOuU]/", $str[$i])){

			$resStr = preg_replace("/[$str[$i]]/", "", $str);
			$resStr .= $str[$i];
			$resStr .= "a";
			$resStr .= "y";
			return $resStr;
		}

	}
	
}

?>