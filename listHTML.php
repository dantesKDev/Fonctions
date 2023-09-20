<?php
// $strN = "France";
// $strElTab = ["Paris", "Bordeaux", "Lyon", "Marseille"];

// echo listHTML($strN, $strElTab);
function listHTML($strN, $strElTab){
    $ch = "<h3>$strN</h3><ul>";
    for($i=0; $i < count($strElTab); $i++){
        $ch .= "<li>$strElTab[$i]</li>";
    }
    $ch .= "</ul>";
    return $ch;
}
?>