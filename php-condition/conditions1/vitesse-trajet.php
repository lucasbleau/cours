<?php

$kms = readline("Saisir un distance (kms) : ") ;
$durée = readline("Saisir une durée (h:mn) : ") ;

$durée1 = strstr($durée, ":", true) ;
$durée2 = substr(strstr($durée, ":"),1) ;

$fondRouge = "\033[41m";
$texteRouge = "\033[31m";
$fondVert = "\033[42m";
$texteVert = "\033[32m";
$normal = "\033[0m";

if (($durée2 > 59) OR ($durée1 > 23)) {
    echo $texteRouge."La durée $durée est invalide !".$normal ;     
} else {
    $durée2 = $durée2/60 ;

    $heuretotal = $durée1 + $durée2 ;

    $vitesse = $kms/$heuretotal ;

    $vitesse = ceil($vitesse) ;

    echo "La vitesse moyenne du trajet est de $vitesse km/h" ;

    echo PHP_EOL ;

    if ($vitesse > 89) {
    echo $fondRouge."Vous êtes au dessus des 90 km/h".$normal ;      
    } else {
    echo $fondVert."Vous êtes en dessous des 90 km/h".$normal ;     
    } 
}
echo PHP_EOL ;

