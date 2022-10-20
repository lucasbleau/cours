<?php

$prix = readline("Saisir un prix HT : ") ;
$tva = readline("Saisir un taux de tva : ") ;

$ttc = $prix*($tva/100+1) ;

echo $ttc ;



