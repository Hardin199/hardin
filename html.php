<?php

function tennies_tournament ($players, $courts){
    $AmountOfGames = $players - $courts;
    return $AmountOfGames;

}

echo tennies_tournament(10,3);
//if the function code runs, it will print out 7

?>