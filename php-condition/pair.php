<?php

/*
Demander à l'utilisateur un nombre 
et afficher si ce nombre est pair ou impair
*/

$nombre = readline("Saisir un nombre : ") ;

$condition = $nombre % 2 != 0 ;
var_dump($condition) ;

if ($nombre % 2 != 0) {
    echo "le nombre est impair " ;
} else {
    echo "le nombre est pair " ;
}



