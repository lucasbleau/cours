<?php

$adresseDépart = readline("saisir l’adresse du point de départ souhaité : ") ;
$adresseArrivé = readline("saisir l’adresse du point d’arrivée souhaité : ") ;
$solde = readline("saisir son solde en euros : ") ;
$avoir = readline("saisir son avoir : ") ;

if ($avoir > 10) {
    echo "L'avoir ne peut pas être supérieur à 10" ;
    echo PHP_EOL ;
}

$villeDépart = substr($adresseDépart,strrpos($adresseDépart," ")+1) ;
$villeArrivé = substr($adresseArrivé,strrpos($adresseArrivé," ")+1) ;

if (($villeDépart == "Paris") AND ($villeArrivé =="Paris")) {
    $montant = 30 ;
    $nouveauSolde = $solde - $montant ;
    $nouvelAvoir = $avoir ;
} elseif (($villeDépart == "Paris") AND ($villeArrivé != "Paris")) {
    $montant = 50 ;
    $nouveauSolde = $solde - $montant + $avoir ;
    $nouvelAvoir = 0 ;
} elseif (($villeDépart != "Paris") AND ($villeArrivé == "Paris")) {
    $montant = 40 ;
    $nouveauSolde = $solde - $montant + (0.5 * $avoir) ;
    $nouvelAvoir = 0.5 * $avoir ;
} elseif (($villeDépart != "Paris") AND ($villeArrivé != "Paris")) {
     ;
}


if () {
    echo "Désolé mais les trajets hors Paris ne sont pas proposés par notre société" ;
    echo PHP_EOL ;
} elseif ($montant >= $solde) {
    echo "Trajet de $villeDépart vers $villeArrivé pour un montant de $montant €" ;
    echo PHP_EOL ;
    echo "Désolé mais votre solde est insuffisant. Veuillez créditer votre solde " ;
} else {
    echo "Trajet de $villeDépart vers $villeArrivé pour un montant de $montant €" ;
    echo PHP_EOL ;
    echo "Votre nouveau solde est de $nouveauSolde € et votre nouvel avoir est de $nouvelAvoir € " ;
}

