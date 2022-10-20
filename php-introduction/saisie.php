<?php

/*Demander a l'utilisateur 
de sasir son prenom puis d'aficher 
la chaine "Je m'appelle "prenom saisi ""
*/

/*saisir votre prenom : lucas
je m'appelle lucas
*/

// Le prenom doit etre afficher en majuscule : strtoupper()
// Le prenom doit etre afficher en minuscule : strtolower()
// La premiere lettre du prenom doit etre en majuscule et le reste en minuscule : ucfirst(strtolower())

$prenom = readline("Saisir votre prenom :");
echo "Je m'appelle ".ucfirst(strtolower($prenom)) ; 




