<?php
//La fonction doit retourner un tableau contenant les noms des trois actions ayant la valeur moyenne la plus elevee. 
//Le tableau doit trie par valeur moyenne décroissante. Chaque action aura une valeur moyenne
$stoks = ['AMZN', 'CACC', 'EQIX', 'GOOG', 'ORLY', 'ULTRA'];
$prices = [[12.81, 11.09, 12.11, 10.93, 9.83, 8.14], [10.34, 10.56, 10.14, 12.17, 13.1,10.50]];

// var_dump($prices);

$moyenneTab = [];

for ($i=0; $i < 6; $i++) { 
    # code...
    $moyenneTab[] += (($prices[0][$i] + $prices[1][$i])/2);
    echo $moyenneTab[$i]." ";
}
rsort($moyenneTab);
echo "<br>";
var_dump($moyenneTab);

?>