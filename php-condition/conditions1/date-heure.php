<?php 

$date = date("d/m/Y") ;
$heure = date("H\hi") ;
echo "Ajourd'hui nous sommes le $date " ;
echo PHP_EOL ;
echo "Il est actuellement $heure" ;
echo PHP_EOL ;

if (date("H") < 13 ) {
    echo "Bonne matinée !" ;
} else {
    echo "Bonne après-midi !" ;
}