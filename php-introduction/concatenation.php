<?php 

//Utilisation de l'operateur de concaténation

$prenom = "Louis" ;
echo "Bonjour, je m'appelle ".$prenom; 
echo PHP_EOL ;

$prenom = "Pierre" ; 
$presentation = "Bonjour, je m'appelle " .$prenom;
echo $presentation ;
echo PHP_EOL ;

echo 'Bonjour, je m\'appelle '.$prenom ;
echo PHP_EOL ;

//Interpolation
echo "Bonjour, je m'appelle $prenom" ;
echo PHP_EOL ;

//Interpolation ne marche pas avec 'simple cote'
echo 'Bonjour, je m\'appelle $prenom' ;
echo PHP_EOL ;

$age = 20 ; 

//avec Interpolation
echo "Je m'appelle $prenom et j'ai $age ans " ;
echo PHP_EOL ;

//avec concatenation
echo "Je m'appelle " .$prenom ." et j'ai " .$age ." ans " ; 
