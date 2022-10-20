<?php

// V1 = Version avec boucle

$notes = [10,12.5,14,7,15,9.5,8] ;

if (count($notes) > 0) {
    $somme = 0 ;
    foreach($notes as $note) {
        $somme += $note;
    }
    $moyenne = $somme/count($notes) ;
    $moyenne = round($moyenne,2) ;

    echo $moyenne ;
    echo PHP_EOL ;
} else {
    echo "Il n'y a aucune note" ;
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
