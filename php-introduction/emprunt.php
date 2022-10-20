<?php

$montant = readline("Saisir un montant à emprunter : ") ;
$taux = readline("Saisir un taux d'interêt à l'année : ") ;
$durée = readline("Saisir une durée en année : ") ;

$taux = $taux/100 ;
$tauxmois = $taux/12 ;


$remboursement = ($montant*$tauxmois)/(1 -(1 + $tauxmois)**(-12*$durée)) ;

$remboursement = round($remboursement,2) ;

echo "La mensualité à rembourser est de $remboursement" ;
 
$coutTotal = ($remboursement*12*$durée)-$montant ;

echo PHP_EOL ;
echo "le cout total de l'emprunt est de $coutTotal" ;



