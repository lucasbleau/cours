<?php

/*
Demander à l'utilisateur de saisir 2 nombres et 
d'afficher si ces 2 nombres sont égaux ou différents
*/

$nombre1 = readline("Saisir un nombre : ") ;
$nombre2 = readline("Saisir un 2eme nombre : ") ;

// l'opérateur == permet de tester l'égalité de 2 valeurs 

$résultat = $nombre1 == $nombre2 ;
var_dump($résultat) ;

if ($nombre1 == $nombre2) { 
    //instruction
    echo "les 2 nombres sont égaux" ; 
} else {
   //instruction
    echo "les 2 nombres sont différents" ;
}
 




