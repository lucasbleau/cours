<?php 

$nombre1 = readline("Saisir un nombre : ") ;
$nombre2 = readline("Saisir un nombre : ") ;

if ($nombre2 == 0) {
    echo "on ne peut pas diviser par 0 " ;
    echo PHP_EOL ;
} else {
    $resultat = round($nombre1/$nombre2,2) ;
    echo "le resultat de la division $nombre1 par $nombre2 est $resultat" ;
}

