<?php

$resultatBTS = [
    ['nom'=>"martin", 'moyenne'=>12],
    ['nom'=>"dupond", 'moyenne'=>14],
    ['nom'=>"marchand", 'moyenne'=>16]
] ;

/*

//Affiche avec une boucle for
for($i = 0 ; $i < count($resultatBTS) ; $i++) {
    $nom = $resultatBTS[$i]['nom'] ;
    $moyenne = $resultatBTS[$i]['moyenne'] ;
    echo "$nom à une moyenne de $moyenne" ;
    echo PHP_EOL ;
}

*/

foreach ($resultatBTS as $etudiant) {
    $nom = $etudiant['nom'] ;
    $moyenne = $etudiant['moyenne'] ;
    echo "$nom à un moyenne de $moyenne" ;
    echo PHP_EOL ;
}
