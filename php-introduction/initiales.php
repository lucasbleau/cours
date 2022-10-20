<?php

$prenom = readline("Saisir votre prénom : ") ;
$nom = readline("Saisir votre nom : ") ;

$initiales = strtoupper(substr($prenom,0,1) . substr($nom,0,1)) ;

echo "Vos initiales sont $initiales" ;