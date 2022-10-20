<?php

// V2 = Version sans boucle

$notes = [10,12.5,14,7,15,9.5,8] ;
$somme = 0 ;

if (count($notes) > 0) {
    $moyenne = array_sum($notes) / count($notes ) ;
    $moyenne = round($moyenne,2) ;
    echo $moyenne ;
}

if ($moyenne < 10) {
    echo "Vous n'avez pas votre diplôme" ;
} elseif ($moyenne < 12) {
    echo "Mention passable" ;
} elseif ($moyenne < 14) {
    echo "Mention assez bien" ;
} elseif ($moyenne < 16) {
    echo "Mention bien" ;
} else {
    echo "Mention très bien" ;
}
