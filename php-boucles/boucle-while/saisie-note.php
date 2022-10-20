<?php

$note = readline("Saisir une note : ") ;

while ($note < 0|| $note > 20) {
        echo "La note saisie est incorrecte ! " ;
        echo PHP_EOL ;
        $note = readline("Saisir une note : ") ;
}  
    echo "La note est correct ! " ;



