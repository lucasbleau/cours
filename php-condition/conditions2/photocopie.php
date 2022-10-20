<?php

$nombrePhotocopie = readline("Saisir un nombre de photocopie réalisée : ") ;

if (($nombrePhotocopie >= 1) AND ($nombrePhotocopie <= 10)) {
    $prix = $nombrePhotocopie * 0.30 ;
} elseif ($nombrePhotocopie <= 30) {
    $prix = ( 10 * 0.3) + (($nombrePhotocopie - 10) * 0.25) ;
} else {
    $prix = (10 * 0.30) + (20 * 0.25) + (($nombrePhotocopie - 30) * 0.20) ;
} 

if ($prix > 50) {
    $prix = $prix * 0.9 ;
}

echo "La facture est de $prix € " ;
    