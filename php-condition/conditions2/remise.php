<?php 

$prixBase = readline("Saisir un prix : ") ;

if ($prixBase < "1000" ) {
    $tauxPourcentage = 5 ;
} elseif ($prixBase >= "5000" ) {
    $tauxPourcentage = 20 ;
} else {
    $tauxPourcentage = 10 ;
}

$fondRouge = "\033[41m";
$normal = "\033[0m";

$remise = $prixBase*($tauxPourcentage*0.01) ;
$prixTotal = $prixBase*(1 - ($tauxPourcentage*0.01)) ;

echo "Le prix de l'article est $prixBase euros" ;
echo PHP_EOL ;
echo "La remise est de $tauxPourcentage % soit ".$fondRouge.number_format($remise, 2, ',', ' ').$normal." euros sur le prix de l'article" ;
echo PHP_EOL ; 
echo "Le montant de l'article après la remise est de ".$fondRouge.number_format($prixTotal, 2, ',', ' ').$normal." euros" ;

