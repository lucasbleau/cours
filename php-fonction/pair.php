<?php



function estPair(int $nombre) : bool {
    return $nombre % 2 == 0 ;
    // retourne un booleen
}

$nombreDemander = readline("Saisir un nombre : ") ;

if (estPair($nombreDemander) == true) {
    echo "le nombre est pair" ;
}  else {
    echo "le nombre est impair " ;
}

