<?php

// V1 = Version avec boucle

$notes = [10,12.5,14,7,15,9.5,8] ;
$valeurMax = 0 ;

foreach($notes as $note) {
    if ($valeurMax < $note) {
        $valeurMax = $note ;
    }
}

echo "La meilleure note est ".$valeurMax ;