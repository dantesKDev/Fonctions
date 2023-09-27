<?php
$cd1 = [5, 10];
$cd2 = [19, 25];

echo coordonnee($cd1, $cd2);

function coordonnee($cd1, $cd2)
{
    $nbr = 0;

    $nbr = sqrt((($cd2[0] - $cd1[0]) ** 2) + (($cd2[1] - $cd1[1])) ** 2);
    return $nbr;
}

?>